<div class="row">
  @if ($moves->count())
    <table class="table table-hover table-sm">
      <thead>
      <tr>
        <th>НОМЕР</th>
        <th>ВРЕМЯ </th>
        <th>ОТКУДА</th>
        <th>КУДА</th>
        <th>СУММА</th>
        <th>КОММЕНТАРИЙ</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($moves as $move)
        <tr>
          <td>
            <a href="#" class="btn btn-primary">
              {{ $move->id}}
            </a>
          </td>
          <td>{{ $move->created_at->format('Y-m-d H:00') }}</td>
          <td>{{ $move->fromStore->name }}</td>
          <td>{{ $move->toStore->name }}</td>
          <td><strong>{{ $move->summa ?? '' }}</strong></td>
          <td>{{ $move->comment }}</td>
          <td>
            <button class="btn btn-sm btn-dark" wire:click="delete({{ $move->id }})">
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
