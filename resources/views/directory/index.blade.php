@extends('layouts.directory')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <livewire:directory.change-device />
        </div>
    </div>

    <div class="modal" tabindex="-1" id="category-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Тип устройства</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <livewire:directory.category-form/>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="brand-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Бренд</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <livewire:directory.brand-form/>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="model-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Модель</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <livewire:directory.model-form/>
                </div>
            </div>
        </div>
    </div>
@endsection
