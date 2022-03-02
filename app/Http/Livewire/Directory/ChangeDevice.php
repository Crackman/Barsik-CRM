<?php

namespace App\Http\Livewire\Directory;

use App\Models\Brand;
use App\Models\DeviceCategory;
use App\Models\DeviceModel;
use Livewire\Component;

class ChangeDevice extends Component
{
    public $device_category_id;
    public $brand_id;
    public $device_model_id;

    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteDeviceCategory', 'deleteBrand', 'deleteDeviceModel'];


    public function setDeviceCategoryId($device_category_id)
    {
        $this->device_category_id = $device_category_id;
        $this->reset('brand_id');
        $this->reset('device_model_id');
    }

    public function setBrandId($brand_id)
    {
        $this->brand_id = $brand_id;
    }

    public function setDeviceModelId($device_model_id)
    {
        $this->device_model_id = $device_model_id;
    }

    public function deleteDeviceCategory($id)
    {
        DeviceCategory::destroy($id);
    }

    public function deleteBrand($id)
    {
        Brand::destroy($id);
    }

    public function deleteDeviceModel($id)
    {
        DeviceModel::destroy($id);
    }

    public function render()
    {
        return view('livewire.directory.change-device', [
            'categories' => DeviceCategory::all(),
            'brands' => Brand::all(),
            'models' => DeviceModel::all()
        ]);
    }
}
