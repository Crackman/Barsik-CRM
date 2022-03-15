<div class="row">
    <form wire:submit.prevent="save" id="move">
        <div class="row align-items-center mb-2">

            <div class="col-auto mb-2">
                <label for="from_store_id" class="col-form-label">Откуда</label>
            </div>
            <div class="col-auto mb-2">
                <select id="from_store_id" wire:model.lazy="from_store_id" class="form-select">
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
                @error('from_store_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-auto mb-2">
                <label for="to_store_id" class="col-form-label">Куда</label>
            </div>
            <div class="col-auto mb-2">
                <select id="to_store_id"  wire:model.lazy="to_store_id" class="form-select">
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
                @error('to_store_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

        </div>

    </form>


    <table class="table table-sm">
        <thead>
        <tr>
            <th>КОД</th>
            <th>НАИМЕНОВАНИЕ</th>
            <th>КОЛИЧЕСТВО</th>
            <th>ОСТАТОК</th>
            <th>ЗАКУПОЧНАЯ</th>
        </tr>
        </thead>
        <tbody>
        @if ($postings && $postings->count())
            @foreach ($postings as $posting)
                @foreach($posting->products as $product)
                    <tr>
                        <td>
                            {{$product->id}}
                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->pivot->real_count }}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @else
            <div class="alert alert-warning">
                Your query returned zero results.
            </div>
        @endif
        </tbody>
    </table>

    <div class="row align-items-end">
        <div class="col-lg-9 mb-3">
            <label for="comment" class="form-label">Комментарий</label>
            <textarea wire:model.lazy="comment" class="form-control" id="comment" rows="4"></textarea>
        </div>

        <div class="col-lg-3 mb-3">
            <button form="move" class="btn btn-primary" id="btnSave" type="submit">Переместить</button>
        </div>
    </div>

</div>

