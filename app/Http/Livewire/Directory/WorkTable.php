<?php

namespace App\Http\Livewire\Directory;

use App\Models\Work;
use Livewire\Component;

class WorkTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteWork' => 'delete', 'setGroupWorkId'];

    public $group_work_id;

    public function setGroupWorkId($group_work_id)
    {
        $this->group_work_id = $group_work_id;
    }

    public function delete($id)
    {
        Work::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.work-table', [
            'works' => Work::filter($this->group_work_id),
        ]);
    }
}
