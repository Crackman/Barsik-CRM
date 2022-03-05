<div class="row">
  <form wire:submit.prevent="save">
    <label for="count"></label>
    <input type="text" class="form-control" id="count" name="count" wire:model ="count">
    @error('count') <span class="text-danger">{{ $message }}</span> @enderror
    <button class="btn btn-primary" id="btnSave" type="submit">Сохранить</button>
  </form>
</div>

