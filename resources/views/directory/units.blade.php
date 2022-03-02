@extends('layouts.directory')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <livewire:directory.unit-table/>
      </div>
    </div>

    <div class="modal" tabindex="-1" id="unit-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Модель</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <livewire:directory.unit-form/>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection