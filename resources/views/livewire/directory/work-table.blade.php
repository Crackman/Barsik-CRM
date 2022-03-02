<table class="table table-sm">
    <thead>
    <tr>
        <th>id</th>
        <th>НАИМЕНОВАНИЕ</th>
        <th>РЕМОНТНАЯ</th>
        <th>СЕБЕСТОИМОСТЬ</th>
        <th>ГРУППА</th>
        <th>ГАРАНТИЯ</th>
        <th>ЗАРПЛАТА</th>
        <th>КОММЕНТАРИЙ</th>
    </tr>
    </thead>
    <tbody>
    @if (!empty($works))
        @foreach ($works as $work)
            <tr>
                <td>
                    <button>{{$work->id}}</button>
                </td>
                <td>
                    {{ $work->name }}
                </td>
                <td>
                    {{ $work->repair_price }}
                </td>
                <td>
                    {{ $work->cost_price }}
                </td>
                <td>
                    {{ $work->group->name }}
                </td>
                <td>
                    {{ $work->warranty }}
                </td>
                <td>
                    {{ $work->salary }}
                </td>
                <td>
                    {{ $work->comment }}
                </td>

                <td>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#work-modal"
                            wire:click="$emitTo('directory.work-form', 'triggerEditWork', {{ $work }})">
                        <i class="fa-solid fa-pencil"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-sm btn-dark" wire:click="$emit('deleteWork', {{ $work->id }})">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
