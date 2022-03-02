<?php

namespace App\Http\Livewire\Directory;

use App\Models\DeviceCategory;
use Livewire\Component;

class CategoryForm extends Component
{
    protected $listeners = ['triggerEditDeviceCategory' => 'editCategory', 'resetForm'];

    public $category_id;
    public $name;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:50',
        ]);

        if ($this->category_id) {
            DeviceCategory::find($this->category_id)
                ->update([
                    'name' => $this->name,
                ]);
            $this->dispatchBrowserEvent('category-saved');
        } else {
            DeviceCategory::create($validated);
            $this->dispatchBrowserEvent('category-saved');
        }

        $this->emitTo('directory.change-device', 'triggerRefresh');
        $this->resetForm();
    }

    public function editCategory($category)
    {
        $this->category_id = $category['id'];
        $this->name = $category['name'];
    }

    public function resetForm()
    {
        $this->reset('category_id');
        $this->reset('name');

    }

    public function render()
    {
        return view('livewire.directory.category-form');
    }
}
