<div>
    <a href="{{route('admin.highlights.edit',$highlight->id)}}" class="btn btn-primary btn-sm mb-2">
        <i class="fas fa-edit"></i> Editar
    </a>
    <button type="button" class="btn btn-danger btn-sm" wire:click="confirmServiceRemoval({{$highlight->id}})">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</div>

