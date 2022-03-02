<?php

namespace App\Http\Livewire\Orders;

use App\Models\Device;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DeviceTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteDevice' => 'delete'];

    public function delete($id)
    {
        Device::destroy($id);
    }

    public function render()
    {
        return view('livewire.orders.device-table',[
            'devices' => Device::with('brand', 'category', 'status', 'type')->latest()->get()
        ]);
    }
}
