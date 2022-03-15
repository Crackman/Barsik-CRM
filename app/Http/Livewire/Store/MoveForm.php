<?php

namespace App\Http\Livewire\Store;

use App\Models\Store;
use Livewire\Component;

class MoveForm extends Component
{
    public $from_store_id, $to_store_id, $stores, $postings, $comment;

    public function mount()
    {
        $this->stores = Store::all();
    }

    public function save() {
        $validated = $this->validate([
            'from_store_id' => 'required',
            'to_store_id' => 'required',
            'comment' => 'required',
            'acceptance_date' => 'required',
        ]);
    }

    public function updatedFromStoreId()
    {
         $this->postings = Store::find($this->from_store_id)->postings->map(function ($posting) {
             return $posting;
        });

    }

    public function render()
    {
        return view('livewire.store.move-form');
    }
}
