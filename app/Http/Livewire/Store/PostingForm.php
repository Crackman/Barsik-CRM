<?php

namespace App\Http\Livewire\Store;

use App\Models\Counterparty;
use App\Models\Posting;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Arr;
use Livewire\Component;

class PostingForm extends Component
{
    protected $listeners = ['triggerEditPosting' => 'editPosting', 'resetForm', 'addProductsCount',
        'addApprovedProducts', 'replaceProductsCount', 'triggerRefresh' => '$refresh'];

    public $store_id, $counterparty_id, $incoming_number, $comment, $acceptance_date, $posting_id, $counts;
    public $counterparties, $stores, $products;
    public $products_count, $approved_products;

    public function mount()
    {
        $this->counts = collect([]);
        $this->products_count = collect([]);
        $this->stores = Store::all();
        $this->counterparties = Counterparty::all();

        if ($this->posting_id) $this->editPosting();
    }

    public function addApprovedProducts()
    {
        $this->approved_products = Product::all()
            ->filter(function ($product) {
                return Arr::exists($this->products_count, $product->id);
            });
    }

    public function save()
    {
        $validated = $this->validate([
            'store_id' => 'required',
            'counterparty_id' => 'required',
            'incoming_number' => 'required',
            'comment' => '',
            'acceptance_date' => 'required',
        ]);

        if($this->posting_id)
        {
            // Remove links in pivot table and recreate.
            $products_id = $this->products_count->keys();
            $products = Product::find($products_id);
            Posting::find($this->posting_id)->products()->detach();
            foreach ($products as $product) {
                Posting::find($this->posting_id)->products()->attach($product, ['count' => $this->products_count[$product->id]]);
            }

            // Update the table.
            Posting::find($this->posting_id)
                ->update([
                    'store_id' => $this->store_id,
                    'counterparty_id' => $this->counterparty_id,
                    'incoming_number' => $this->incoming_number,
                    'comment' => $this->comment,
                    'acceptance_date' => $this->acceptance_date,
                    'summa' => $this->summa(posting_id : $this->posting_id),
                ]);
        }
        else
        {
            $products_id = $this->products_count->keys();
            $approved_products = Product::find($products_id);
            $validated = Arr::add($validated, 'summa', $this->summa(products : $approved_products));
            $posting = Posting::create($validated);
            foreach ($approved_products as $product) {
                Posting::find($posting->id)->products()->attach($product, ['count' => $this->products_count[$product->id]]);
            }
        }

        return redirect()->route('store.index');
    }

    public function summa($products = null, $posting_id = null)
    {
        $counts = collect([]);

        if ($products)
        {
            dd($products);
            foreach ($products as $product) {
                $counts->push($this->products_count[$product->id] * $product->purchase_price);
            }
            return $counts->sum();
        }
        elseif ($posting_id)
        {
            $products = Posting::find($posting_id)->products;
            foreach ($products as $product) {
                $counts->push($product->pivot->count * $product->purchase_price);
            }
            return $counts->sum();
        }
    }


    public function addProductsCount($id, $count = 0)
    {
        $this->products_count->put($id, $count);
        $this->addApprovedProducts();
    }

    public function replaceProductsCount($delete_id, $replace_id, $count)
    {
        if ($delete_id == $replace_id)
        {
            $this->products_count->forget($delete_id);
            $this->products_count->put($replace_id, $count);
        }
        else
        {
            $this->products_count->put($replace_id, $count);
            $this->products_count->forget($delete_id);
        }
        $this->addApprovedProducts();
    }

    public function deleteProductCount($id)
    {
        $this->products_count->forget($id);
        if ($this->posting_id) Posting::find($this->posting_id)->products()->detach($id);
        $this->addApprovedProducts();
    }

    public function editPosting()
    {
        $posting = Posting::find($this->posting_id);
        $this->store_id = $posting['store_id'];
        $this->counterparty_id = $posting['counterparty_id'];
        $this->incoming_number = $posting['incoming_number'];
        $this->comment = $posting['comment'];
        $this->acceptance_date = $posting['acceptance_date'];

        $this->approved_products = Posting::find($posting['id'])->products;
        foreach ($this->approved_products as $approved_product)
        {
            $this->products_count->put($approved_product->id, $approved_product->pivot->count);
        }
    }

    public function resetForm()
    {
    }


    public function render()
    {
        return view('livewire.store.posting-form');
    }
}
