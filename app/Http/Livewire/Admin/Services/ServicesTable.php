<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ServicesTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $serviceBeginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Service::with('category')->orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nombre','name')
                ->searchable(),
            Column::make('Categoria','category.name')
                ->searchable(),
            Column::make('Imagen','image_source')
                ->format(function(Service $model) {
                    return $this->html("<img src='". url('/storage/services').'/'.$model->image_source ."' style='width: 150px'></img>");
                }),
            Column::make('Acciones')
                ->format(function(Service $model) {
                    return view('admin.services.includes.actions', ['service' => $model]);
                })
        ];

    }

    public function confirmServiceRemoval($service_id){
        $this->serviceBeginRemoved = $service_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        Service::find($this->serviceBeginRemoved)->delete();
    }
}
