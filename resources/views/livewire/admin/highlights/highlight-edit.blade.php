<div>
    <form wire:submit.prevent="update">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Titúlo</label>
                    <input type="text" class="form-control" id="title" name="title"
                           placeholder="Titúlo" wire:model="title">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description"
                           placeholder="Descripción" wire:model="description">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Seleccione un icono</label><br>
                    <div class="btn-group open" wire:ignore>
                        <button type="button" class="btn btn-outline-warning iconpicker-component">
                            <i class="{{$icon}} iconpicker-component"></i>
                        </button>
                        <button type="button" class="icp icp-dd btn btn-warning dropdown-toggle" data-selected="fa-car"
                                data-toggle="dropdown" aria-expanded="true">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu iconpicker-container"></div>
                    </div>
                    @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
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
@push('js')
    <script>
        $(document).ready(function () {
            $('.icp-dd').iconpicker()
            $('.icp-dd').on('iconpickerSelected', function (event) {
            @this.set('icon', event.iconpickerValue);
            })
        })
    </script>
@endpush
