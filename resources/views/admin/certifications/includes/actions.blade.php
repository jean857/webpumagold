<div>
    <a href="{{route('certifications.edit',$certification->id)}}" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i> Editar
    </a>
    <button type="button" class="btn btn-danger btn-sm" wire:click="confirmServiceRemoval({{$certification->id}})">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</div>
