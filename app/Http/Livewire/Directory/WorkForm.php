<?php

namespace App\Http\Livewire\Directory;

use App\Models\GroupWork;
use App\Models\Work;
use Livewire\Component;

class WorkForm extends Component
{
    protected $listeners = ['triggerEditWork' => 'editWork', 'resetForm'];

    public $work_id, $name, $repair_price, $cost_price, $group_work_id, $warranty, $salary, $comment;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
            'repair_price' => '',
            'cost_price' => 'required',
            'group_work_id'=> 'required',
            'warranty' => '',
            'salary' => 'required',
            'comment' => '',
        ]);

        if ($this->work_id) {
            Work::find($this->work_id)
                ->update([
                    'name' => $this->name,
                    'repair_price' => $this->repair_price,
                    'cost_price' => $this->cost_price,
                    'group_work_id' => $this->group_work_id,
                    'warranty' => $this->warranty,
                    'salary' => $this->salary,
                    'comment' => $this->comment,
                ]);
            $this->dispatchBrowserEvent('work-saved');
        } else {
            Work::create($validated);
            $this->dispatchBrowserEvent('work-saved');
        }

        $this->emitTo('directory.work-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editWork($work)
    {
        $this->work_id = $work['id'];
        $this->name = $work['name'];
        $this->repair_price = $work['repair_price'];
        $this->cost_price = $work['cost_price'];
        $this->group_work_id = $work['group_work_id'];
        $this->warranty = $work['warranty'];
        $this->salary = $work['salary'];
        $this->comment = $work['comment'];
    }

    public function resetForm()
    {
        $this->reset('work_id');
        $this->reset('name');
        $this->reset('repair_price');
        $this->reset('cost_price');
        $this->reset('group_work_id');
        $this->reset('warranty');
        $this->reset('salary');
        $this->reset('comment');

    }
    public function render()
    {
        return view('livewire.directory.work-form', [
            'groups' => GroupWork::all(),
        ]);
    }
}
