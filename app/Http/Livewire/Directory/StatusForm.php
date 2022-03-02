<?php

namespace App\Http\Livewire\Directory;

use App\Models\DeviceStatus;
use Livewire\Component;

class StatusForm extends Component
{

    protected $listeners = ['triggerEditStatus' => 'editStatus', 'resetForm'];

    public $status_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->status_id) {
            DeviceStatus::find($this->status_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('status-saved');
        } else {
            DeviceStatus::create($validated);
            $this->dispatchBrowserEvent('status-saved');
        }

        $this->emitTo('directory.status-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editStatus($status)
    {
        $this->status_id = $status['id'];
        $this->name = $status['name'];
    }

    public function resetForm()
    {
        $this->reset('status_id');
        $this->reset('name');

    }

    public function render()
    {
        return view('livewire.directory.status-form');
    }
}
