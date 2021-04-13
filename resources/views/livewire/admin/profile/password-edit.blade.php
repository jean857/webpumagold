<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Contraseña" wire:model="password">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Contraseña confirmación</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                           placeholder="Contraseña confirmación" wire:model="password_confirmation">
                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
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
