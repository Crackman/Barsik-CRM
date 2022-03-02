<div>
    <form wire:submit.prevent="save">
        <div class="form-group mb-3">
            <select  wire:model.lazy="device_category_id" class="form-select">
                <option value='' >Выбирите категорию</option>
                @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('device_category_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3" >
            <select  wire:model.lazy="brand_id" class="form-select">
                <option value=''>Выбирите бренд</option>
                @if(!@empty($categories->find($device_category_id)->brands))
                    @foreach($categories->find($device_category_id)->brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                @endif
            </select>
            @error('brand_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <select  wire:model.lazy="device_model_id" id="modal_id" class="form-select">
                <option value='' >Выбирите Модель</option>
                @if(!@empty($brands->find($brand_id)->models))
                    @foreach($brands->find($brand_id)->models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                @endif
            </select>
            @error('device_model_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <select  wire:model.lazy="device_status_id" class="form-select">
                <option value=''>Выбирите статус заказа</option>
                @foreach($statuses as $status)
                    <option value="{{ $status->id }}" >{{ $status->name }}</option>
                @endforeach
            </select>
            @error('device_status_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <select  wire:model.lazy="order_type_id" class="form-select">
                <option value=''>Выбирите Тип заказа</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            @error('order_type_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="number_mobile">Номер телефона</label>
            <input type="text" class="form-control" id="number_mobile" name="number_mobile"
                   wire:model.lazy="number_mobile">
            @error('number_mobile') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="defect">Заявленая неисправность</label>
            <input type="text" class="form-control" id="defect" name="defect" wire:model.lazy="defect">
            @error('defect') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="complete_before">Завершить до</label>
            <input type="date" class="form-control" id="complete_before" name="complete_before"
                   wire:model.lazy="complete_before">
            @error('complete_before') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button class="btn btn-primary" id="btnSave"  type="submit">Сохранить</button>
    </form>
</div>

