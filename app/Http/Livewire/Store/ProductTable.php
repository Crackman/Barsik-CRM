<?php

namespace App\Http\Livewire\Store;

use App\Models\GroupProduct;
use App\Models\Product;
use Illuminate\Support\Arr;
use Livewire\Component;

class ProductTable extends Component
{

    protected $listeners = ['triggerEditPosting' => 'editPosting', 'resetForm', 'setProductsCount',
        'triggerRefresh' => '$refresh'];

    public $groups, $count;
    public $products_count = [];

    public function mount()
    {
        $this->groups = GroupProduct::all();
    }

    public function save()
    {

    }

    public  function setProductsCount($products_count)
    {
        $this->products_count = $products_count;
    }

    public function editModel($model)
    {
    }

    public function resetForm()
    {
    }


    public function render()
    {
        return view('livewire.store.product-table', [
            'products' => Product::all(),
        ]);
    }
}
