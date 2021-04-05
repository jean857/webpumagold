<?php

namespace App\Http\Livewire\Admin\CompanyPrinciples;

use App\Models\CompanyPrinciple;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CompanyPrinciplesTable extends TableComponent
{
    use HtmlComponents;
    public $searchEnabled = false;
    public $paginationEnabled = false;

    public function query(): Builder
    {
        return CompanyPrinciple::orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Nosotros', 'description')
                ->format(function (CompanyPrinciple $model) {
                    return $this->html($model->description);
                }),
            Column::make('Misión', 'mission')
                ->format(function (CompanyPrinciple $model) {
                    return $this->html($model->mission);
                }),
            Column::make('Visión', 'vision')
                ->format(function (CompanyPrinciple $model) {
                    return $this->html($model->vision);
                }),
            Column::make('Medio Ambiente', 'environment')
                ->format(function (CompanyPrinciple $model) {
                    return $this->html($model->environment);
                }),
            Column::make('Acciones')
                ->format(function (CompanyPrinciple $model) {
                    return view('admin.company_principles.includes.actions', ['company' => $model]);
                })
        ];

    }
}
