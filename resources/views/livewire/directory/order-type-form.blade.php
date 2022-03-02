<form wire:submit.prevent="save">
    <div class="form-group">
        <label for="name">Тип заказа</label>
        <input type="text" class="form-control" id="name" name="name" wire:model.lazy="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button class="btn btn-primary" id="btnSave"  type="submit">Сохранить</button>
</form>
