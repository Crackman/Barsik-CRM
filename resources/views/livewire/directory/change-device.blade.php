<div class="row">
    <div class="col-lg-4">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Тип устройства</th>
                </tr>
                </thead>
                <tbody>
                @if (!@empty($categories))
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <button wire:click="setDeviceCategoryId({{$category->id}})">{{$category->name}}</button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#category-modal"
                                    wire:click="$emitTo('directory.category-form', 'triggerEditDeviceCategory', {{ $category }})">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-dark"
                                    wire:click="$emit('deleteDeviceCategory', {{ $category->id }})">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                @endif
                <tr>
                    <td>
                        <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')"
                                data-bs-toggle="modal" data-bs-target="#category-modal">
                            Добавить<i class="fa-solid fa-plus fa-2x"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        @if (!@empty($categories->find($device_category_id)->brands))
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Бренд</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories->find($device_category_id)->brands as $brand)
                    <tr>
                        <td>
                            <button wire:click="setBrandId({{$brand->id}})">{{$brand->name}}</button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#brand-modal"
                                    wire:click="$emitTo('directory.brand-form', 'triggerEditBrand', {{ $brand }})">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-dark" wire:click="$emit('deleteBrand', {{ $brand->id }})">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <button class="btn btn-success btn-plus"
                                wire:click="$emitTo('directory.brand-form', 'setDeviceCategoryId', {{ $device_category_id }})"
                                data-bs-toggle="modal" data-bs-target="#brand-modal">
                            Добавить<i class="fa-solid fa-plus fa-2x"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        @endif
    </div>

    <div class="col-lg-4">
        @if (!@empty($brands->find($brand_id)->models))
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Модель</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brands->find($brand_id)->models as $model)
                    <tr>
                        <td>
                            <button wire:click="setDeviceModelId({{$model->id}})">{{$model->name}}</button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#model-modal"
                                    wire:click="$emitTo('directory.model-form', 'triggerEditDeviceModel', {{ $model }})">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-dark" wire:click="$emit('deleteDeviceModel', {{ $model->id }})">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <button class="btn btn-success btn-plus"
                                wire:click="$emitTo('directory.model-form', 'setBrandId', {{ $brand_id }})"
                                data-bs-toggle="modal" data-bs-target="#model-modal">
                            Добавить<i class="fa-solid fa-plus fa-2x"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        @endif
    </div>
</div>



