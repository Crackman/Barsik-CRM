<div>
    <form wire:submit.prevent="save">

        <div class="form-group mb-3">
            <label for="defect">Наименование</label>
            <input type="text" class="form-control" id="name" name="name" wire:model.lazy="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="repair_price">Ремонтная цена</label>
            <input type="text" class="form-control" id="repair_price" name="repair_price" wire:model.lazy="repair_price">
            @error('repair_price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="cost_price">Себестоимость</label>
            <input type="text" class="form-control" id="cost_price" name="cost_price" wire:model.lazy="cost_price">
            @error('cost_price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <select  wire:model.lazy="group_work_id" class="form-select">
                <option value=''>Выбирите Группу</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
            @error('group_work_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="warranty">Гарантия</label>
            <input type="text" class="form-control" id="warranty" name="warranty" wire:model.lazy="warranty">
            @error('warranty') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="salary">Зарплата</label>
            <input type="text" class="form-control" id="salary" name="salary" wire:model.lazy="salary">
            @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="comment">Коментарий</label>
            <input type="text" class="form-control" id="comment" name="comment" wire:model.lazy="comment">
            @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button class="btn btn-primary" id="btnSave"  type="submit">Сохранить</button>
    </form>
</div>

