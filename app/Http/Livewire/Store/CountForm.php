<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;

class CountForm extends Component
{
    public $count, $product_id;

    protected $listeners = ['setProductId', 'resetForm'];

    public function save()
    {
        $validated = $this->validate([
            'count' => 'required',
        ]);
        if($this->count > 0){
            $this->emitTo('store.posting-form','addProductsCount',$this->product_id, $this->count );
            $this->dispatchBrowserEvent('count-saved');
            $this->emit('showModalProduct');
        }
        $this->resetForm();
    }

    public function setProductId($id)
    {
        $this->product_id = $id;
        $this->emit('showModalCount');
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
