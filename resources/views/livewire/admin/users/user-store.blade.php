<div>
    <form wire:submit.prevent="store">
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
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Tipo de usuario</label>
                    <select class="form-control" id="tipo" name="tipo" wire:model="tipo">
                        <option value="null">Seleccione un tipo</option>
                        @foreach($roles as $rol_user)
                            <option value="{{$rol_user->id}}">{{$rol_user->name}}</option>
                        @endforeach
                    </select>
                    @error('tipo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
            </div>
        </div>
    </form>
</div>
