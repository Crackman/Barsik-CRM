<?php

namespace App\Http\Livewire\Directory;

use App\Models\Brand;
use App\Models\DeviceCategory;
use Livewire\Component;

class BrandForm extends Component
{
    protected $listeners = ['triggerEditBrand' => 'editBrand', 'resetForm', 'setDeviceCategoryId'];

    public $brand_id;
    public $name;
    public $device_category_id;

    public  function mount()
    {
        $this->categories = DeviceCategory::all();
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
            'device_category_id' => 'required|integer'
        ]);

        if ($this->brand_id) {
            Brand::find($this->brand_id)
                ->update([
                    'name' => $this->name,
                    'device_category_id' => $this->device_category_id,
                ]);
            $this->dispatchBrowserEvent('brand-saved');
        } else {
            Brand::create($validated);
            $this->dispatchBrowserEvent('brand-saved');
        }

        $this->emitTo('directory.change-device', 'triggerRefresh');
        $this->resetForm();
    }

    public function editBrand($brand)
    {
        $this->brand_id = $brand['id'];
        $this->name = $brand['name'];
        $this->device_category_id = $brand['device_category_id'];
    }

    public function resetForm()
    {
        $this->reset('brand_id');
        $this->reset('name');
        $this->reset('device_category_id');
    }

    public function setDeviceCategoryId($category_id)
    {
        $this->device_category_id = $category_id;
    }

    public function render()
    {
        return view('livewire.directory.brand-form');
    }
}
