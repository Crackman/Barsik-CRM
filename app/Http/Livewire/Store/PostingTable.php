<?php

namespace App\Http\Livewire\Store;

use App\Models\Posting;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class PostingTable extends Component
{

    protected $listeners = ['triggerRefresh' => '$refresh'];

    public function delete($id)
    {
        Posting::find($id)->products()->detach();
        Posting::destroy($id);
    }

    public function render()
    {
        return view('livewire.store.posting-table', [
            'postings' => Posting::all(),
        ]);
    }
}
