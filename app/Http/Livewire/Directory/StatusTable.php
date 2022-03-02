<?php

namespace App\Http\Livewire\Directory;

use App\Models\DeviceStatus;
use Livewire\Component;

class StatusTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteStatus' => 'delete'];

    public function delete($id)
    {
        DeviceStatus::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.status-table',[
            'statuses' => DeviceStatus::all()
        ]);
    }
}

