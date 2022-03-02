<div>
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="mt-1">
                <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal"
                        data-bs-target="#counterparty-modal">
                    Добавить<i class="fa-solid fa-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th>ИМЯ / КОМПАНИЯ</th>
                    <th>ТИП </th>
                    <th>ЛОЯЛЬНОСТЬ</th>
                    <th>ГРУППА</th>
                    <th>ТЕЛЕФОН</th>
                    <th>EMAIL</th>
                    <th>АДРЕС</th>
                    <th>ПРИМИЧАНИЕ</th>
                </tr>
                </thead>
                <tbody>
                @if (!empty($counterparties))
                @foreach ($counterparties as $counterparty)
                    <tr>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#counterparty-modal"
                                    wire:click="$emitTo('directory.counterparty-form', 'triggerEditCounterparty',
                                    {{ $counterparty }}, {{ $counterparty->passport }})">
                                {{ $counterparty->name}}
                            </button>
                        </td>
                        <td>{{ $counterparty->type->name ?? ''}}</td>
                        <td>{{ $counterparty->respect->name ?? '' }}</td>
                        <td>{{ $counterparty->group->name ?? ''}}</td>
                        <td>{{ $counterparty->phone}}</td>
                        <td>{{ $counterparty->email}}</td>
                        <td>{{ $counterparty->address}}</td>
                        <td>{{ $counterparty->remark}}</td>
                        <td>
                            <button class="btn btn-sm btn-dark" wire:click="$emit('deleteCounterparty', {{ $counterparty->id }})">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">
                Your query returned zero results.
            </div>
        @endif
    </div>

    <p>{{ $counterparties->count() }}</p>

</div>
