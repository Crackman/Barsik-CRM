<?php

namespace App\Http\Livewire\Directory;

use App\Models\DeviceModel;
use Livewire\Component;

class ModelForm extends Component
{

    protected $listeners = ['triggerEditDeviceModel' => 'editModel', 'resetForm', 'setBrandId'];

    public $model_id;
    public $name;
    public $brand_id;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
            'brand_id' => 'required|integer'
        ]);

        if ($this->model_id) {
            DeviceModel::find($this->model_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('model-saved');
        } else {
            DeviceModel::create($validated);
            $this->dispatchBrowserEvent('model-saved');
        }

        $this->emitTo('directory.change-device', 'triggerRefresh');
        $this->resetForm();
    }

    public function editModel($model)
    {
        $this->model_id = $model['id'];
        $this->brand_id = $model['brand_id'];
        $this->name = $model['name'];
    }

    public function resetForm()
    {
        $this->reset('model_id');
        $this->reset('name');
        $this->reset('brand_id');
    }

    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function render()
    {
        return view('livewire.directory.model-form');
    }
}
