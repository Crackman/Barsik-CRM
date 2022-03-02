<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupProduct;
use Livewire\Component;

class GroupProductForm extends Component
{
    protected $listeners = ['triggerEditGroupProduct' => 'editGroupProduct', 'resetForm'];

    public $group_product_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->group_product_id) {
            GroupProduct::find($this->group_product_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('group-product-saved');
        } else {
            GroupProduct::create($validated);
            $this->dispatchBrowserEvent('group-product-saved');
        }

        $this->emitTo('directory.group-product-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editGroupProduct($group)
    {
        $this->group_product_id = $group['id'];
        $this->name = $group['name'];
    }

    public function resetForm()
    {
        $this->reset('group_product_id');
        $this->reset('name');

    }

    public function render()
    {
        return view('livewire.directory.group-product-form');
    }
}
