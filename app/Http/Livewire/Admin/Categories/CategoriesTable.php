<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CategoriesTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $categoryBeginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Category::orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nombre','name')
                ->searchable()->sortable(),
            Column::make('Acciones')
                ->format(function(Category $model) {
                    return view('admin.categories.includes.actions', ['category' => $model]);
                })
        ];

    }

    public function confirmCategoryRemoval($category_id){
        $this->categoryBeginRemoved = $category_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        Category::find($this->categoryBeginRemoved)->delete();
    }

}
