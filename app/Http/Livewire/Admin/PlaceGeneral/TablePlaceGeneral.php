<?php

namespace App\Http\Livewire\Admin\PlaceGeneral;

use App\Models\Place;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TablePlaceGeneral extends TableComponent
{
    use HtmlComponents;
    public $searchEnabled =  false;
    public $paginationEnabled =  false;

    public function query(): Builder
    {
        return Place::orderby('id', 'desc');
    }

    /**
     * @inheritDoc
     */
    public function columns(): array
    {
        return [
            Column::make('address'),
            Column::make('phone_number'),
            Column::make('email'),
            Column::make('Actions')
                ->format(function(Place $model) {
                    return view('admin.places-general.includes.actions', ['place' => $model]);
                })
        ];
    }

}
