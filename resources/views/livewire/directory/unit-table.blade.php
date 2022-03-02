<div>
  <div class="row">
    <div class="col-md-12">
      <div class="mt-2">
        <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal" data-bs-target="#unit-modal">
          Добавить<i class="fa-solid fa-plus fa-2x"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <table class="table table-sm">
      <thead>
      <tr>
        <th>Единица измерения</th>
      </tr>
      </thead>
      <tbody>
      @if (!@empty($units))
        @foreach ($units as $unit)
          <tr>
            <td>
              <button>{{ $unit->name}}</button>
            </td>
            <td>
              <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#unit-modal"
                      wire:click="$emitTo('directory.unit-form', 'triggerEditUnit', {{ $unit }})">
                <i class="fa-solid fa-pencil"></i>
              </button>
            </td>
            <td>
              <button class="btn btn-sm btn-dark" wire:click="$emit('deleteUnit', {{ $unit->id }})">
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

