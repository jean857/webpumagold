<div>
    <a href="{{route('admin.banner_home.edit',$banner->id)}}" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i> Editar
    </a>
    <button type="button" class="btn btn-danger btn-sm" wire:click="confirmRemoval({{$banner->id}})">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</div>

