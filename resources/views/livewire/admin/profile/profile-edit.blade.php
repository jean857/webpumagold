<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre de usuario</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Nombre del servicio" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </div>
    </form>
</div>
