@extends('layouts.orders')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="mt-1">
                        <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal" data-bs-target="#device-modal">
                            Добавить<i class="fa-solid fa-plus fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <livewire:orders.device-table />
            </div>

            <div class="modal" tabindex="-1" id="device-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Устройство</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:orders.device-form/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
