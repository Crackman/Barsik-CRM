<?php

namespace App\Http\Livewire\Directory;

use App\Models\Unit;
use Livewire\Component;

class UnitForm extends Component
{
    protected $listeners = ['triggerEditUnit' => 'editUnit', 'resetForm'];

    public $unit_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->unit_id) {
            Unit::find($this->unit_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('unit-saved');
        } else {
            Unit::create($validated);
            $this->dispatchBrowserEvent('unit-saved');
        }

        $this->emitTo('directory.unit-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editUnit($unit)
    {
        $this->unit_id = $unit['id'];
        $this->name = $unit['name'];
    }

    public function resetForm()
    {
        $this->reset('unit_id');
        $this->reset('name');

    }

    public function render()
    {
        return view('livewire.directory.unit-form');
    }
}
