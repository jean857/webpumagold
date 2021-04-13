<div>
    <form wire:submit.prevent="update">
        @csrf
        <div class="col-md-8 mb-4">
            <label for="image_source">Imagen (tamaño recomendado 1920 x 244 px)</label><br>
            @if(!empty($image_preview))
                <img src="{{$image_preview}}" class="img-thumbnail mb-4" width="180px">
            @endif
            <input type="file" id="image_source" wire:model="image_source" class="form-control-file">
            @error('image_source') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-row">
            <div class="col-md-12 mt-5">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="button" wire:click="cancel">Cancelar</button>
            </div>
        </div>
    </form>
</div>

