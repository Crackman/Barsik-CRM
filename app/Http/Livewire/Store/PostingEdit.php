<?php

namespace App\Http\Livewire\Store;

use App\Models\Counterparty;
use App\Models\Posting;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Arr;
use Livewire\Component;

class PostingEdit extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh'];

    public $posting_id;

    public function mount($id)
    {
        $this->posting_id = $id;
    }

    public function render()
    {
        return view('livewire.store.posting-edit')
            ->layout('layouts.store');
    }
}
