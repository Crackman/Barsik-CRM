<div>
    <form wire:submit.prevent="save">

        <div class="row mb-2">
            <div class="col-lg-6">
                <label for="name">Имя / Компания</label>
                <input type="text" class="form-control" id="name" name="name" wire:model.lazy="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-6">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" wire:model.lazy="phone">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" wire:model.lazy="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-6">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" id="address" name="address" wire:model.lazy="address">
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6">
                <select  wire:model.lazy="counterparty_type_id" class="form-select">
                    <option value=''>Выбирите Тип контрагента</option>
                    @foreach($counterparty_types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('counterparty_type_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-6">
                <select  wire:model.lazy="respect_id" class="form-select">
                    <option value=''>Выбирите уровень лояльности</option>
                    @foreach($respects as $respect)
                        <option value="{{ $respect->id }}">{{ $respect->name }}</option>
                    @endforeach
                </select>
                @error('respect_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-12">
                <select  wire:model.lazy="group_counterparty_id" class="form-select">
                    <option value=''>Выбирите Группу</option>
                    @foreach($group_counterparties as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
                @error('group_counterparty_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="remark" class="form-label">Примичание</label>
                <textarea class="form-control" id="remark" rows="3" wire:model.lazy="remark"></textarea>
                @error('remark') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <h5>ПАСПОРТНЫЕ ДАННЫЕ</h5>
            <div class="col-lg-6">
                <label for="series" class="form-label">Серия</label>
                <input type="text" class="form-control" id="series" name="series" wire:model.lazy="series">
                @error('series') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-6">
                <label for="issued_by" class="form-label">Кем выдан</label>
                <input type="text" class="form-control" id="address" name="issued_by" wire:model.lazy="issued_by">
                @error('issued_by') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6">
                <label for="department_code" class="form-label">Код подразделения</label>
                <input type="text" class="form-control" id="department_code" name="department_code" wire:model.lazy="department_code">
                @error('department_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-6">
                <label for="date_birth" class="form-label">Дата рождения</label>
                <input type="date" class="form-control" id="date_birth" name="date_birth" wire:model.lazy="date_birth">
                @error('date_birth') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-6">
                    <label for="date_issue" class="form-label">Дата выдачи</label>
                    <input type="date" class="form-control" id="date_issue" name="date_issue" wire:model.lazy="date_issue">
                    @error('date_issue') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-6">
                <label for="place_birth" class="form-label">Место выдачи</label>
                <input type="text" class="form-control" id="place_birth" name="place_birth" wire:model.lazy="place_birth">
                @error('place_birth') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-12">
                <label for="inn" class="form-label">ИНН</label>
                <input type="text" class="form-control" id="inn" name="inn" wire:model.lazy="inn">
                @error('inn') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <button class="btn btn-primary" id="btnSave"  type="submit">Сохранить</button>
    </form>
</div>

