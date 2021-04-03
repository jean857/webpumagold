<div>
    <form wire:submit.prevent="store">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre de la categoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                           placeholder="Nombre de la categoria" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
    </form>
</div>
