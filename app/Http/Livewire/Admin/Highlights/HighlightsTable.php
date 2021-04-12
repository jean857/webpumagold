<?php

namespace App\Http\Livewire\Admin\Highlights;

use App\Models\Highlight;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class HighlightsTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $beginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Highlight::orderBy('id', 'desc');
    }


    public function columns(): array
    {
        return [
            Column::make('Titúlo', 'title'),
            Column::make('Descripción', 'description'),
            Column::make('Icono', 'icon')->format(function (Highlight $model) {
                return $this->html("<i class='".$model->icon." fa-3x text-warning'></i>");
            }),
            Column::make('Acciones')
                ->format(function (Highlight $model) {
                    return view('admin.highlights.includes.actions', ['highlight' => $model]);
                })
        ];

    }

    public function confirmServiceRemoval($highlight_id)
    {
        $this->beginRemoved = $highlight_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        Highlight::find($this->beginRemoved)->delete();
    }
}
