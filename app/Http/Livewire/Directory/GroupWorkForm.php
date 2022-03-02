<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupWork;
use Livewire\Component;

class GroupWorkForm extends Component
{

    protected $listeners = ['triggerEditGroupWork' => 'editGroupWork', 'resetForm'];

    public $group_work_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->group_work_id) {
            GroupWork::find($this->group_work_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('group-work-saved');
        } else {
            GroupWork::create($validated);
            $this->dispatchBrowserEvent('group-work-saved');
        }

        $this->emitTo('directory.group-work-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editGroupWork($group)
    {
        $this->group_work_id = $group['id'];
        $this->name = $group['name'];
    }

    public function resetForm()
    {
        $this->reset('group_work_id');
        $this->reset('name');

    }
    public function render()
    {
        return view('livewire.directory.group-work-form');
    }
}
