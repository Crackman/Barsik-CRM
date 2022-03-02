<?php

namespace App\Http\Livewire\Directory;

use App\Models\Counterparty;
use App\Models\CounterpartyType;
use App\Models\GroupCounterparty;
use App\Models\Passport;
use App\Models\Respect;
use Livewire\Component;

class CounterpartyForm extends Component
{

    protected $listeners = ['triggerEditCounterparty' => 'editCounterparty', 'resetForm'];

    public $counterparty_id, $name, $counterparty_type_id, $respect_id, $group_counterparty_id, $phone, $email,
        $address, $remark;
    public $counterparty_types, $respects, $group_counterparties;
    public $series, $issued_by, $department_code, $date_birth, $date_issue, $place_birth, $inn;

    public  function mount()
    {
        $this->counterparty_types = CounterpartyType::all();
        $this->respects = Respect::all();
        $this->group_counterparties = GroupCounterparty::all();
    }

    public function save()
    {
        $validated_counterparty = $this->validate([
            'name' => 'required|max:50',
            'counterparty_type_id'=> '',
            'respect_id' => '',
            'group_counterparty_id' => '',
            'phone' => '',
            'email' => '',
            'address' => '',
            'remark' => '',
        ]);

        if ($this->counterparty_id) {
            Counterparty::find($this->counterparty_id)
                ->update([
                    'name' => $this->name,
                    'counterparty_type_id' => $this->counterparty_type_id,
                    'respect_id' => $this->respect_id,
                    'group_counterparty_id' => $this->group_counterparty_id,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    'address' => $this->address,
                    'remark' => $this->remark
                ]);
            $this->dispatchBrowserEvent('counterparty-saved');
        } else {
            $model =  Counterparty::create($validated_counterparty);
            $this->counterparty_id = $model->id;

            $validated_passport = $this->validate([
                'counterparty_id' => '',
                'series' => '',
                'issued_by'=> '',
                'department_code' => '',
                'date_birth' => '',
                'date_issue' => '',
                'place_birth' => '',
                'inn' => '',
            ]);

            Passport::create($validated_passport);
            $this->dispatchBrowserEvent('counterparty-saved');
        }

        $this->emitTo('directory.counterparty-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function editCounterparty($counterparty, $passport)
    {
        $this->counterparty_id = $counterparty['id'];
        $this->name = $counterparty['name'];
        $this->counterparty_type_id = $counterparty['counterparty_type_id'];
        $this->respect_id = $counterparty['respect_id'];
        $this->group_counterparty_id = $counterparty['group_counterparty_id'];
        $this->phone = $counterparty['phone'];
        $this->email = $counterparty['email'];
        $this->address = $counterparty['address'];
        $this->remark = $counterparty['remark'];

        $this->series = $passport['series'];
        $this->issued_by = $passport['issued_by'];
        $this->department_code = $passport['department_code'];
        $this->date_birth = $passport['date_birth'];
        $this->date_issue = $passport['date_issue'];
        $this->place_birth = $passport['place_birth'];
        $this->inn = $passport['inn'];
    }

    public function resetForm()
    {
        $this->reset('counterparty_id');
        $this->reset('name');
        $this->reset('counterparty_type_id');
        $this->reset('respect_id');
        $this->reset('group_counterparty_id');
        $this->reset('phone');
        $this->reset('email');
        $this->reset('address');
        $this->reset('remark');

        $this->reset('series');
        $this->reset('issued_by');
        $this->reset('department_code');
        $this->reset('date_birth');
        $this->reset('date_issue');
        $this->reset('place_birth');
        $this->reset('inn');
    }
    public function render()
    {
        return view('livewire.directory.counterparty-form');
    }
}
