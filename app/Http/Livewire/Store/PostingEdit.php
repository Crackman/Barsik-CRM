<?php

namespace App\Http\Livewire\Store;

use App\Models\Counterparty;
use App\Models\Posting;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Arr;
use Livewire\Component;

class PostingEdit extends Component
{
    protected $listeners = ['triggerEditPosting' => 'editPosting', 'resetForm', 'addProductsCount',
        'addApprovedProducts', 'replaceProductsCount', 'triggerRefresh' => '$refresh'];

    public $store_id, $counterparty_id, $incoming_number, $comment, $acceptance_date, $posting_id;
    public $counterparties, $stores, $products, $test;
    public $products_count;
    public $approved_products;

    public function mount($id)
    {
        $this->posting_id = $id;
        $this->products_count = collect([]);
        $this->stores = Store::all();
        $this->counterparties = Counterparty::all();

        $posting = Posting::find($id);
        $this->store_id = $posting['store_id'];
        $this->counterparty_id = $posting['counterparty_id'];
        $this->incoming_number = $posting['incoming_number'];
        $this->comment = $posting['comment'];
        $this->acceptance_date = $posting['acceptance_date'];

        $this->approved_products = $posting->products;
        foreach ($this->approved_products as $approved_product) {
            $this->products_count->put($approved_product->id, 0);
        }
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

        $posting = Posting::create($validated);
        $products_id = $this->products_count->keys();
        $products = Product::find($products_id);
        $posting->products()->attach($products);

        return redirect()->route('store.index');
    }

    public function addProductsCount($id, $count = 0)
    {
        $this->products_count->put($id, $count);
        $this->addApprovedProducts();
    }

    public function replaceProductsCount($delete_id, $replace_id)
    {
        $this->products_count->put($replace_id, $this->products_count[$delete_id]);
        $this->products_count->forget($delete_id);
        $this->addApprovedProducts();
    }

    public function deleteProductCount($id)
    {
        $this->products_count->forget($id);
        $this->addApprovedProducts();
    }

    public function resetForm()
    {
    }

    public function render()
    {
        return view('livewire.store.posting-edit')
            ->layout('layouts.store');
    }
}
