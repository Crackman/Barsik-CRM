<form wire:submit.prevent="save">
  <div class="form-group mb-3">
    <label for="name">Наименование</label>
    <input type="text" class="form-control" id="name" name="name" wire:model.lazy="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <select  wire:model.lazy="group_product_id" class="form-select">
      <option value='' >Выбирите группу</option>
      @foreach($groups as $group)
        <option value="{{ $group->id }}">{{ $group->name }}</option>
      @endforeach
    </select>
    @error('group_product_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <select  wire:model.lazy="unit_id" class="form-select">
      <option value='' >Выбирите единицу измерения</option>
      @foreach($units as $unit)
        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
      @endforeach
    </select>
    @error('unit_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <label for="parent_id"> Parent id</label>
    <input type="number" class="form-control" id="parent_id" name="parent_id" wire:model.lazy="parent_id">
    @error('parent_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div>


  <div class="form-group mb-3">
    <label for="purchase_price">Закупочная цена</label>
    <input type="number" class="form-control" id="purchase_price" name="purchase_price" wire:model.lazy="purchase_price">
    @error('purchase_price') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <label for="retail_price">Розничная цена</label>
    <input type="number" class="form-control" id="retail_price" name="retail_price" wire:model.lazy="retail_price">
    @error('retail_price') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <label for="repair_price">Ремонтная цена</label>
    <input type="number" class="form-control" id="repair_price" name="repair_price" wire:model.lazy="repair_price">
    @error('repair_price') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <label for="min_balance">Минимальное количество</label>
    <input type="number" class="form-control" id="min_balance" name="min_balance" wire:model.lazy="min_balance">
    @error('min_balance') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group mb-3">
    <label for="warranty">Гарантия</label>
    <input type="number" class="form-control" id="warranty" name="warranty" wire:model.lazy="warranty">
    @error('warranty') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <button class="btn btn-primary" id="btnSave"  type="submit">Сохранить</button>
</form>
