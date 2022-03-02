<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Unit;
use Livewire\Component;

class ProductForm extends Component
{

    protected $listeners = ['triggerEditProduct' => 'editProduct', 'resetForm'];

    public $product_id, $name, $group_product_id, $unit_id, $purchase_price, $retail_price, $repair_price,
        $min_balance, $warranty, $units;

    public  function mount()
    {
        $this->units = Unit::all();
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
            'group_product_id'=> 'required',
            'unit_id' => 'required',
            'purchase_price' => '',
            'retail_price' => 'required',
            'repair_price' => '',
            'min_balance' => '',
            'warranty' => '',
        ]);

        if ($this->product_id) {
            Product::find($this->product_id)
                ->update([
                    'name' => $this->name,
                    'group_product_id' => $this->group_product_id,
                    'unit_id' => $this->unit_id,
                    'purchase_price' => $this->purchase_price,
                    'retail_price' => $this->retail_price,
                    'repair_price' => $this->repair_price,
                    'min_balance' => $this->min_balance,
                    'warranty' => $this->warranty
                ]);
            $this->dispatchBrowserEvent('product-saved');
        } else {
            Product::create($validated);
            $this->dispatchBrowserEvent('product-saved');
        }

        $this->emitTo('directory.product-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editProduct($product)
    {
        $this->product_id = $product['id'];
        $this->name = $product['name'];
        $this->group_product_id = $product['group_product_id'];
        $this->unit_id = $product['unit_id'];
        $this->purchase_price = $product['purchase_price'];
        $this->retail_price = $product['retail_price'];
        $this->repair_price = $product['repair_price'];
        $this->min_balance = $product['min_balance'];
        $this->warranty = $product['warranty'];
    }

    public function resetForm()
    {
        $this->reset('product_id');
        $this->reset('name');
        $this->reset('group_product_id');
        $this->reset('unit_id');
        $this->reset('purchase_price');
        $this->reset('retail_price');
        $this->reset('repair_price');
        $this->reset('min_balance');
        $this->reset('warranty');
    }

    public function render()
    {
        return view('livewire.directory.product-form', [
            'groups' => GroupProduct::all(),
        ]);
    }
}
