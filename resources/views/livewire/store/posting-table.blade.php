<div class="row">
    @if ($postings->count())
        <table class="table table-hover table-sm">
            <thead>
            <tr>
                <th>НОМЕР</th>
                <th>ВРЕМЯ </th>
                <th>СКЛАД</th>
                <th>КОНТРАГЕНТ</th>
                <th>СУММА</th>
                <th>КОММЕНТАРИЙ</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($postings as $posting)
                <tr>
                    <td>
                        <a href="{{ route('store.posting.edit', [$posting->id]) }}" class="btn btn-primary">
                            {{ $posting->incoming_number}}
                        </a>
                    </td>
                    <td>{{ $posting->acceptance_date }}</td>
                    <td>{{ $posting->store->name }}</td>
                    <td>{{ $posting->counterparty->name }}</td>
                    <td><strong>{{ $posting->summa ?? '' }}</strong></td>
                    <td>{{ $posting->comment }}</td>
                    <td>
                        <button class="btn btn-sm btn-dark" wire:click="delete({{ $posting->id }})">
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
