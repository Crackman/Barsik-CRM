<?php

namespace App\Http\Livewire\Directory;

use App\Models\OrderType;
use Livewire\Component;

class OrderTypeForm extends Component
{
    protected $listeners = ['triggerEditType' => 'editType', 'resetForm'];

    public $type_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->type_id) {
            OrderType::find($this->type_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('type-saved');
        } else {
            OrderType::create($validated);
            $this->dispatchBrowserEvent('type-saved');
        }

        $this->emitTo('directory.order-type-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editType($type)
    {
        $this->type_id = $type['id'];
        $this->name = $type['name'];
    }

    public function resetForm()
    {
        $this->reset('type_id');
        $this->reset('name');

    }

    public function render()
    {
        return view('livewire.directory.order-type-form');
    }
}
