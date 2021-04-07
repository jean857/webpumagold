<div>
    <a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i> Editar
    </a>
    <button type="button" class="btn btn-danger btn-sm" wire:click="confirmServiceRemoval({{$service->id}})">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</div>
