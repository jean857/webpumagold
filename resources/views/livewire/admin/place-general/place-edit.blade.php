<div>
    <form wire:submit.prevent="update">
        <h5>Datos generales</h5>
        <hr>
        <div class="form-row">
            <input type="hidden" wire:model="place_id">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address"
                           placeholder="Dirección" wire:model="address">
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="phone_number">Telefono</label>
                    <input type="text" class="form-control" id="phone_number" placeholder="Telefono">
                </div>
            </div>
        </div>
        <h5>Redes sociales</h5>
        <hr>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" placeholder="Facebook URL">
                    @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" placeholder="Twitter">
                    @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" placeholder="Instagram">
                    @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="vimeo">Vimeo o Youtube</label>
                    <input type="text" class="form-control" id="vimeo" placeholder="URL">
                    @error('vimeo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
    </form>
</div>
