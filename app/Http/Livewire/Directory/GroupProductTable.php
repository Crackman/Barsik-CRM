<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupProduct;
use Livewire\Component;

class GroupProductTable extends Component
{

    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteGroup' => 'delete'];

    public function delete($id)
    {
        GroupProduct::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.group-product-table', [
            'groups' => GroupProduct::all()
        ]);
    }
}
