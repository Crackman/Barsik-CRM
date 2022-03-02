<div class="row">
    @if (!empty($postings))
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
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#posting-modal"
                                wire:click="$emitTo('store.posting-form', 'triggerEditPosting', {{ $posting }})">
                            {{ $posting->incoming_number}}
                        </button>
                    </td>
                    <td>{{ $posting->acceptance_date }}</td>
                    <td>{{ $posting->store->name }}</td>
                    <td>{{ $posting->counterparty->name }}</td>
                    <td>----</td>
                    <td>{{ $posting->comment }}</td>
                    <td>
                        <button class="btn btn-sm btn-dark" wire:click="$emit('deletePosting', {{ $posting->id }})">
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

<p>{{ $postings->count() }}</p>
