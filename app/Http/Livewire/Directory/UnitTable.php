<?php

namespace App\Http\Livewire\Directory;

use App\Models\Unit;
use Livewire\Component;

class UnitTable extends Component
{

    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteUnit' => 'delete'];

    public function delete($id)
    {
        Unit::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.unit-table', [
            'units' => Unit::all()
        ]);
    }
}
