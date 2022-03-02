<?php

namespace App\Http\Livewire\Directory;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteProduct' => 'delete', 'setGroupProductId'];

    public $group_product_id;

    public function setGroupProductId($group)
    {
        $this->group_product_id = $group;
    }

    public function delete($id)
    {
        Product::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.product-table', [
            'products' => Product::filter($this->group_product_id),
        ]);
    }
}
