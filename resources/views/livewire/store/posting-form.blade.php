<div class="row">
  <form wire:submit.prevent="save" id="posting">
    <div class="row">
      <div class="col-lg-3 mb-2">
        <select  wire:model.lazy="store_id" class="form-select">
          <option value=''>Выбирите склад</option>
          @foreach($stores as $store)
            <option value="{{ $store->id }}">{{ $store->name }}</option>
          @endforeach
        </select>
        @error('store_id') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="col-lg-3 mb-2">
        <select  wire:model.lazy="counterparty_id" class="form-select">
          <option value=''>Выбирите контрагента</option>
          @foreach($counterparties as $counterparty)
            <option value="{{ $counterparty->id }}">{{ $counterparty->name }}</option>
          @endforeach
        </select>
        @error('counterparty_id') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 mb-2">
        <label for="incoming_number">Входящий номер</label>
        <input type="text" class="form-control" id="incoming_number" name="incoming_number" wire:model.lazy="incoming_number">
        @error('incoming_number') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="col-lg-3 mb-2">
        <label for="acceptance_date">Дата приёмки</label>
        <input type="date" class="form-control" id="acceptance_date" name="acceptance_date" wire:model.lazy="acceptance_date">
        @error('acceptance_date') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
    </div>
  </form>


    <table class="table table-sm">
      <thead>
      <tr>
        <th>КОД</th>
        <th>НАИМЕНОВАНИЕ</th>
        <th>КОЛИЧЕСТВО</th>
        <th>ЗАКУПОЧНАЯ</th>
        <th>СУММА</th>
        <th>РОЗНИЧНАЯ</th>
        <th>РЕМОНТНАЯ</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          <button class="btn btn-success btn-sm btn-plus" data-bs-toggle="modal" data-bs-target="#product-modal">
            Добавить<i class="fa-solid fa-plus fa-2x"></i>
          </button>
        </td>
      </tr>
      @if (!@empty($approved_products))
        @foreach ($approved_products as $product)
          <tr>
            <td>
              {{$product->id}}
            </td>
            <td>
              {{ $product->name }}
            </td>
            <td>
              {{ $products_count[$product->id] ?? '' }}
            </td>
            <td>
              {{ $product->purchase_price }}
            </td>
            <td>
              {{ ($product->purchase_price * $products_count[$product->id]) ?? ' ' }}
            </td>
            <td>
              {{ $product->retail_price }}
            </td>
            <td>
              {{ $product->repair_price }}
            </td>
            <td>
              <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#product-form-modal"
                      wire:click="$emitTo('store.product-form','triggerEditProduct', {{ $product }}, {{ $products_count[$product->id] }})">
                <i class="fa-solid fa-pencil"></i>
              </button>
            </td>
            <td>
              <button class="btn btn-sm btn-dark" wire:click="deleteProductCount({{ $product->id }})">
                <i class="fa-solid fa-trash"></i>
              </button>
            </td>
          </tr>
        @endforeach
      @endif
      </tbody>
    </table>

  <div class="row align-items-end">
    <div class="col-lg-9 mb-3">
      <label for="comment" class="form-label">Комментарий</label>
      <textarea wire:model.lazy="comment" class="form-control" id="comment" rows="4"></textarea>
    </div>

    <div class="col-lg-3 mb-3">
      <button form="posting" class="btn btn-primary" id="btnSave" type="submit">Сохранить</button>
    </div>
  </div>
</div>

