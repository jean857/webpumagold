<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Nombre del certificado" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control"
                          wire:model="description" rows="3" placeholder="Descripción"></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-8 mb-4 mt-3">
                <label for="description">Imagen</label><br>
                <img src="{{$image_preview}}" class="img-thumbnail mb-4" width="180px">
                <input type="file" id="image_source" wire:model="image_source" class="form-control-file">
                @error('image_source') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mt-5">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
            </div>
        </div>
    </form>
</div>
