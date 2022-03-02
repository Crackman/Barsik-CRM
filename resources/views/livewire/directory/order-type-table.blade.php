<div>
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2">
                <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal" data-bs-target="#type-modal">
                    Добавить<i class="fa-solid fa-plus fa-2x"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-sm">
            <thead>
            <tr>
                <th>Типы заказа</th>
            </tr>
            </thead>
            <tbody>
            @if (!@empty($orderTypes))
            @foreach ($orderTypes as $type)
                <tr>
                    <td>
                        <button>{{$type->name}}</button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#type-modal"
                                wire:click="$emitTo('directory.order-type-form', 'triggerEditType', {{ $type }})">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-dark" wire:click="$emit('deleteType', {{ $type->id }})">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

