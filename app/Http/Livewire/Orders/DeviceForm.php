<?php

namespace App\Http\Livewire\Orders;

use App\Models\Brand;
use App\Models\Device;
use App\Models\DeviceCategory;
use App\Models\DeviceStatus;
use App\Models\OrderType;
use Livewire\Component;

class DeviceForm extends Component
{
    protected $listeners = ['triggerEditDevice' => 'editDevice', 'resetForm'];

    public $device_id, $device_category_id, $brand_id, $device_model_id, $device_status_id, $order_type_id;
    public $number_mobile;
    public $defect;
    public $complete_before;

    public $categories, $brands, $statuses, $types;

    public  function mount()
    {
        $this->categories = DeviceCategory::all();
        $this->brands = Brand::all();
        $this->statuses = DeviceStatus::all();
        $this->types = OrderType::all();
    }

    public function save()
    {
        $validated = $this->validate([
            'device_category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'device_model_id' => 'required',
            'device_status_id' => 'required|integer',
            'order_type_id' => 'required|integer',
            'number_mobile' => 'max:50',
            'defect' => 'required|max:100',
            'complete_before' => 'required'
        ]);

        if ($this->device_id) {
            Device::find($this->device_id)
                ->update([
                    'device_category_id' => $this->device_category_id,
                    'brand_id' => $this->brand_id,
                    'device_model_id' => $this->device_model_id,
                    'device_status_id' => $this->device_status_id,
                    'order_type_id' => $this->order_type_id,
                    'number_mobile' => $this->number_mobile,
                    'defect' => $this->defect,
                    'complete_before' => $this->complete_before,
                ]);
            $this->dispatchBrowserEvent('device-saved');
        } else
        {
            Device::create($validated);
            $this->dispatchBrowserEvent('device-saved');
        }
        $this->emitTo('orders.device-table', 'triggerRefresh');
        $this->resetForm();
    }

    public function updatedDeviceCategoryId()
    {
        $this->reset('brand_id');
        $this->reset('device_model_id');
    }

    public function updatedBrandId()
    {
        $this->reset('device_model_id');
    }

    public function resetForm()
    {
        $this->reset('device_id');
        $this->reset('device_category_id');
        $this->reset('brand_id');
        $this->reset('device_model_id');
        $this->reset('device_status_id');
        $this->reset('order_type_id');
        $this->reset('number_mobile');
        $this->reset('defect');
        $this->reset('complete_before');
    }

    public function editDevice($device)
    {
        $this->device_id = $device['id'];
        $this->device_category_id = $device['device_category_id'];
        $this->brand_id = $device['brand_id'];
        $this->device_model_id = $device['device_model_id'];
        $this->device_status_id = $device['device_status_id'];
        $this->order_type_id = $device['order_type_id'];
        $this->number_mobile = $device['number_mobile'];
        $this->defect = $device['defect'];
        $this->complete_before = $device['complete_before'];
    }

    public function render()
    {
        return view('livewire.orders.device-form');
    }
}
