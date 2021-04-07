<div>
    <form wire:submit.prevent="store()">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre del servicio</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Nombre del servicio" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="category">Categoria</label>
                    <select class="form-control" id="category" name="category" wire:model="category_id">
                        <option value="null">Seleccione una categoria</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-2" wire:ignore>
                <div class="form-group">
                    <label for="name">Desea publicarlo ?</label><br>
                    <input type="checkbox" name="published" id="published" data-off-text="NO" data-on-text="SI">
                </div>
            </div>
            <div class="col-md-12" wire:ignore>
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control" wire:model="description"></textarea>
            </div>
            <div class="col-md-12">
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-8 mb-4">
                <label for="description">Imagen</label>
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

@push('js')
    <script>
        $(document).ready(function () {
            $('#published').bootstrapSwitch()
            $('#published').on('switchChange.bootstrapSwitch', function (event, state) {
            @this.set('published', state);
            })
            $('#description').summernote({
                placeholder: 'Escriba la descripción del servicio',
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
            // let description = $('#description').summernote('code');
            // if(description.length > 0){
            // @this.set('description', description);
            // }

        })
    </script>
@endpush
