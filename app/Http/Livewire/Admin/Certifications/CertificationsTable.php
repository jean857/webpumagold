<?php

namespace App\Http\Livewire\Admin\Certifications;

use App\Models\Certification;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CertificationsTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $certificationBeginRemoved = null;
    protected $listeners = ['remove'];


    public function query(): Builder
    {
        return Certification::orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nombre','name')
                ->searchable(),
            Column::make('Descripción','description')
                ->searchable(),
            Column::make('Imagen','image_source')
                ->format(function(Certification $model) {
                    return $this->html("<img src='". url('/storage/certifications').'/'.$model->image_source ."' style='width: 150px'></img>");
                }),
            Column::make('Acciones')
                ->format(function(Certification $model) {
                    return view('admin.certifications.includes.actions', ['certification' => $model]);
                })
        ];

    }

    public function confirmServiceRemoval($certification_id){
        $this->certificationBeginRemoved = $certification_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        Certification::find($this->certificationBeginRemoved)->delete();
    }
}
