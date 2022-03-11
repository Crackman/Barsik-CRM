<?php

namespace App\Http\Livewire\Store;

use App\Models\Move;
use Livewire\Component;

class MoveTable extends Component
{
    public function render()
    {
        return view('livewire.store.move-table', [
            'moves' => Move::with('fromStore', 'toStore')->latest()->get(),
        ]);
    }
}
