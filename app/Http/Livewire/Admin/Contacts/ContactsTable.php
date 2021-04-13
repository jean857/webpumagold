<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ContactsTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $serviceBeginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Contact::with([
            'services' => function ($query) {
                $query->select(['id', 'name']);
            }
        ])->orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nombre', 'name')
                ->searchable(),
            Column::make('Email', 'email')
                ->searchable(),
            Column::make('Telf.', 'phone'),
            Column::make('Empresa', 'business')
                ->searchable(),
            Column::make('Servicio', 'services.name')
                ->searchable(),
            Column::make('Mensaje', 'message'),
            Column::make('Fec. Registro', 'created_at')
                ->searchable()
        ];

    }

}
