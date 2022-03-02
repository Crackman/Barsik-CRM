<table class="table table-sm">
  <thead>
  <tr>
    <th>id</th>
    <th>НАИМЕНОВАНИЕ</th>
    <th>ГРУППА</th>
    <th>ЕД.ИЗМЕРЕНИЯ</th>
    <th>ЗАКУПОЧНАЯ</th>
    <th>РОЗНИЧНАЯ</th>
    <th>РЕМОНТНАЯ</th>
    <th>МИН. КОЛИЧЕСТВО</th>
    <th>ГАРАНТИЯ</th>
  </tr>
  </thead>
    <tbody>
    @if (!@empty($products))
    @foreach ($products as $product)
      <tr>
        <td>
          <button>{{$product->id}}</button>
        </td>
        <td>
          {{ $product->name }}
        </td>
        <td>
          {{ $product->group->name }}
        </td>
        <td>
          {{ $product->unit->name }}
        </td>
        <td>
          {{ $product->purchase_price }}
        </td>
        <td>
          {{ $product->retail_price }}
        </td>
        <td>
          {{ $product->repair_price }}
        </td>
        <td>
          {{ $product->min_balance }}
        </td>
        <td>
          {{ $product->warranty }}
        </td>

        <td>
          <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#product-modal"
                  wire:click="$emitTo('directory.product-form', 'triggerEditProduct', {{ $product }})">
            <i class="fa-solid fa-pencil"></i>
          </button>
        </td>
        <td>
          <button class="btn btn-sm btn-dark" wire:click="$emit('deleteProduct', {{ $product->id }})">
            <i class="fa-solid fa-trash"></i>
          </button>
        </td>
      </tr>
    @endforeach
    @endif
    </tbody>
</table>
