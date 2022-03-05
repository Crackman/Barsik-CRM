<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

class CountForm extends Component
{
    public $count, $product_id;

    protected $listeners = ['setProductId'];

    public function save()
    {
        $validated = $this->validate([
            'count' => 'required',
        ]);
        if($this->count > 0){
            $this->emit('addProductsCount',$this->product_id, $this->count );
            $this->dispatchBrowserEvent('count-hide');
            $this->emit('showModalProduct');
        }
        $this->resetForm();
    }

    public function setProductId($id)
    {
        $this->product_id = $id;
    }

    public function resetForm()
    {
        $this->reset('count');
    }

    public function render()
    {
        return view('livewire.store.count-form');
    }
}
