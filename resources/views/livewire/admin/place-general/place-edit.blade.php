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
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <input type="text" class="form-control" id="phone_number" placeholder="Telefono" wire:model="phone_number">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="phone_number">Horario de trabajo</label>
                    <input type="text" class="form-control" id="business_hours" placeholder="Horario de trabajo"  wire:model="business_hours">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Ubicacion Mapa (URL)</label>
                    <input type="text" class="form-control" id="map" placeholder="Ubicacion Mapa (URL)"  wire:model="map_url">
                    @error('map_url') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <h5>Redes sociales</h5>
        <hr>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" placeholder="Facebook URL" wire:model="facebook">
                    @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" placeholder="Twitter" wire:model="twitter">
                    @error('twitter') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" placeholder="Instagram" wire:model="instagram">
                    @error('instagram') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="vimeo">Vimeo o Youtube</label>
                    <input type="text" class="form-control" id="vimeo" placeholder="URL" wire:model="vimeo">
                    @error('vimeo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
    </form>
</div>
