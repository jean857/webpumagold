<div>
    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm">
        <i class="fas fa-edit"></i> Editar
    </a>
    <button type="button" class="btn btn-danger btn-sm" wire:click="confirmCategoryRemoval({{$category->id}})">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</div>
