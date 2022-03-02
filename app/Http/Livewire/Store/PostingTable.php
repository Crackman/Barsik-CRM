<?php

namespace App\Http\Livewire\Store;

use App\Models\Posting;
use Livewire\Component;

class PostingTable extends Component
{

    protected $listeners = ['triggerRefresh' => '$refresh', 'deletePosting' => 'delete'];

    public function delete($id)
    {
        Posting::destroy($id);
    }

    public function render()
    {
        return view('livewire.store.posting-table', [
            'postings' => Posting::all(),
        ]);
    }
}
