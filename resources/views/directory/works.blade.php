@extends('layouts.directory')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="mt-2">
          <button class="btn btn-success btn-plus" wire:click="$emit('triggerCreate')" data-bs-toggle="modal" data-bs-target="#work-modal">
            Работа<i class="fa-solid fa-plus fa-2x"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <livewire:directory.group-work-table/>
      </div>
      <div class="col-lg-9">
        <livewire:directory.work-table/>
      </div>

      <div class="modal" tabindex="-1" id="work-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Товар</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <livewire:directory.work-form/>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" id="group-work-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Группа</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <livewire:directory.group-work-form/>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
