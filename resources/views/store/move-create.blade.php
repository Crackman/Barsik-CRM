@extends('layouts.store')

@section('content')
    <div class="container-fluid">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <livewire:store.move-form />

{{--            <div class="modal" tabindex="-1" id="product-modal" aria-hidden="true">
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
            </div>--}}

        </div>
    </div>
@endsection
