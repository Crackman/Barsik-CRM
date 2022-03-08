<div class="row">

  <table class="table table-sm col-md-3">
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
        </tr>
      @endforeach
    @endif
    </tbody>
  </table>

    <table class="table table-sm col-md-9">
      <thead>
      <tr>
        <th>КОД</th>
        <th>dirty</th>
        <td>PARENT_ID</td>
        <th>НАИМЕНОВАНИЕ</th>
        <th>ГРУППА</th>
        <th>ЕД.ИЗМЕРЕНИЯ</th>
        <th>ЗАКУПОЧНАЯ</th>
        <th>РОЗНИЧНАЯ</th>
        <th>РЕМОНТНАЯ</th>
        <th>КОЛИЧЕСТВО</th>
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
              {{ $product->dirty ?? '' }}
            </td>
            <td>
              {{ $product->parent_id ?? '' }}
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
              {{ $product->parent->name ?? '' }}
            </td>

            <td>
              <button class="btn btn-success btn-sm btn-plus"
                      wire:click="$emitTo('store.count-form','setProductId', {{ $product->id }})">
                Добавить<i class="fa-solid fa-plus fa-2x"></i>
              </button>
            </td>
          </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>