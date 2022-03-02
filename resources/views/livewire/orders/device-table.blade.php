<div class="row">
@if (!empty($devices))
  <table class="table table-hover table-sm">
    <thead>
    <tr>
      <th>Бренд</th>
      <th>Категория </th>
      <th>Модель</th>
      <th>Статус</th>
      <th>Тип</th>
      <th>Неисправность</th>
      <th>Завершить до</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($devices as $device)
      <tr>
        <td>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#device-modal"
                  wire:click="$emitTo('orders.device-form', 'triggerEditDevice', {{ $device }})">
            {{ $device->brand->name}}
          </button>
        </td>
        <td>{{ $device->category->name}}</td>
        <td>{{ $device->model->name }}</td>
        <td>{{ $device->status->name}}</td>
        <td>{{ $device->type->name}}</td>
        <td>{{ $device->defect}}</td>
        <td>{{ $device->complete_before}}</td>
        <td>
          <button class="btn btn-sm btn-dark" wire:click="$emit('deleteDevice', {{ $device->id }})">
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

<p>{{ $devices->count() }}</p>
