<table class="table table-sm">
  <thead>
  <tr>
    <th>Группы</th>
  </tr>
  </thead>
  <tbody>
  @if (!@empty($groups))
  @foreach ($groups as $group)
    <tr>
      <td>
        <button wire:click="$emitTo('directory.product-table', 'setGroupProductId', {{ $group->id }})">{{$group->name}}</button>
      </td>
      <td>
        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#group-product-modal"
                wire:click="$emitTo('directory.group-product-form', 'triggerEditGroupProduct', {{ $group }})">
          <i class="fa-solid fa-pencil"></i>
        </button>
      </td>
      <td>
        <button class="btn btn-sm btn-dark" wire:click="$emit('deleteGroup', {{ $group->id }})">
          <i class="fa-solid fa-trash"></i>
        </button>
      </td>
    </tr>
  @endforeach
  @endif
  <tr>
    <td>
      <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal"
              data-bs-target="#group-product-modal">
        Добавить<i class="fa-solid fa-plus fa-2x"></i>
      </button>
    </td>
  </tr>
  </tbody>
</table>
