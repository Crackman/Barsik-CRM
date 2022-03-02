<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupWork;
use Livewire\Component;

class GroupWorkTable extends Component
{

    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteGroupWork' => 'delete'];

    public function delete($id)
    {
        GroupWork::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.group-work-table', [
            'groups' => GroupWork::all(),
        ]);
    }
}
