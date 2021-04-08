<?php

namespace App\Http\Livewire\Admin\HomeBanners;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class HomeBannersTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $bannerBeginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Banner::where('page', '=', 'home')->orderBy('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make('Imagen', 'image_source')
                ->format(function (Banner $model) {
                    if (!empty($model->image_source)) {
                        return $this->html("<img src='".url('/storage/banners').'/'.$model->image_source."' style='width: 150px'></img>");
                    } else {
                        return '<No cuenta con una imagen>';
                    }
                }),
            Column::make('Descripción', 'description')
                ->format(function (Banner $model) {
                    return $this->html($model->description);
                }),
            Column::make('Actions')
                ->format(function (Banner $model) {
                    return view('admin.home_banners.includes.actions', ['banner' => $model]);
                })
        ];

    }

    public function confirmRemoval($banner_id)
    {
        $this->bannerBeginRemoved = $banner_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'title' => '¿Está seguro?',
            'text' => '¡No podrás revertir esto!'
        ]);
    }

    public function remove()
    {
        Banner::find($this->bannerBeginRemoved)->delete();
    }
}
