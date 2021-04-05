<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-12" wire:ignore>
                <label for="description">Nosotros</label>
                <textarea id="description" name="description" class="form-control" wire:model="description"></textarea>
            </div>
            <div class="col-md-12">
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12" wire:ignore>
                <label for="description">Misión</label>
                <textarea id="mission" name="mission" class="form-control" wire:model="mission"></textarea>
            </div>
            <div class="col-md-12">
                @error('mission') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12" wire:ignore>
                <label for="description">Visión</label>
                <textarea id="vision" name="vision" class="form-control" wire:model="vision"></textarea>
            </div>
            <div class="col-md-12">
                @error('vision') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12" wire:ignore>
                <label for="description">Medio Ambiente</label>
                <textarea id="environment" name="environment" class="form-control" wire:model="environment"></textarea>
            </div>
            <div class="col-md-12">
                @error('environment') <span class="text-danger">{{ $message }}</span> @enderror
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
            $('#mission').summernote({
                placeholder: 'Escriba la misión',
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
                    @this.set('mission', contents);
                    }
                }
            })
            $('#vision').summernote({
                placeholder: 'Escriba la visión',
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
                    @this.set('vision', contents);
                    }
                }
            })
            $('#environment').summernote({
                placeholder: 'Escriba sobre el cuidado del medio ambiente',
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
                    @this.set('environment', contents);
                    }
                }
            })
        })
    </script>
@endpush
