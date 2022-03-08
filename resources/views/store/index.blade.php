@extends('layouts.store')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row mb-2">
                <div class="col-md-12 mt-1">
                    <a href="{{ route('store.posting.create') }}" class="btn btn-success">Оприходовать<i class="fa-solid fa-plus fa-2x"></i></a>
                </div>
            </div>


            <div class="col-md-12">
                <livewire:store.posting-table />
            </div>

            <div class="modal" tabindex="-1" id="posting-modal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Устройство</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:store.posting-form/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="product-modal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Товар</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:store.product-table/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="product-form-modal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Товар</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:store.product-form/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="count-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Количество</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:store.count-form/>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
