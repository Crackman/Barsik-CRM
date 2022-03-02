@extends('layouts.directory')

@section('content')
    <div class="container-fluid">
        <div class="row">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="col-md-12">
                <livewire:directory.counterparty-table />
            </div>

            <div class="modal" tabindex="-1" id="counterparty-modal" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Контрагент</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:directory.counterparty-form/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
