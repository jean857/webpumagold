<?php

namespace App\Http\Livewire\Admin\AboutUsBanner;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AboutUsBannerTable extends TableComponent
{
    use HtmlComponents;
    public $perPage = 10;
    public $searchEnabled = false;
    public $bannerBeginRemoved = null;
    protected $listeners = ['remove'];

    public function query(): Builder
    {
        return Banner::where('page', '=', 'about_us')->orderBy('id', 'desc');
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
            Column::make('Actions')
                ->format(function (Banner $model) {
                    return view('admin.banners.about_us.includes.actions', ['banner' => $model]);
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
