<?php

namespace App\Http\Livewire\Directory;

use App\Models\Counterparty;
use Livewire\Component;

class CounterpartyTable extends Component
{
    protected $listeners = ['triggerRefresh' => '$refresh', 'deleteCounterparty' => 'delete', 'setGroupProductId'];

    public $group_product_id;

    public function setGroupProductId($group)
    {
        $this->group_product_id = $group;
    }

    public function delete($id)
    {
        Counterparty::destroy($id);
    }


    public function render()
    {
        return view('livewire.directory.counterparty-table', [
            'counterparties' => Counterparty::with('type', 'respect', 'group')->latest()->get(),
        ]);
    }
}
