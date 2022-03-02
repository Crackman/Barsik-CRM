<?php

namespace App\Http\Livewire\Directory;

use App\Models\OrderType;
use Livewire\Component;

class OrderTypeTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteType' => 'delete'];

    public function delete($id)
    {
        OrderType::destroy($id);
    }


    public function render()
    {
        return view('livewire.directory.order-type-table', [
            'orderTypes' => OrderType::all()
        ]);
    }
}
