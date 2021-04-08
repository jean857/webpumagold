<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-12" wire:ignore>
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control" wire:model="description"></textarea>
            </div>
            <div class="col-md-12">
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <label for="description">Imagen (tamaño recomendado 1920 x 670 px)</label><br>
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

@push('js')
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                placeholder: 'Escriba una descripción',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', []],
                    ['view', []]
                ],
                callbacks: {
                    onChange: function (contents, $editable) {
                        console.log(contents)
                    @this.set('description', contents);
                    }
                }
            })
        })
    </script>
@endpush

