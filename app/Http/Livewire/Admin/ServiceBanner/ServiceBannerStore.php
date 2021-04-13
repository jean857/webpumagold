<?php

namespace App\Http\Livewire\Admin\ServiceBanner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceBannerStore extends Component
{
    use WithFileUploads;

    public $image_source = '';

    protected $rules = [
        'image_source' => 'required|image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function mount()
    {
        $count = Banner::where('page', 'services')->orderBy('id', 'desc')->get();
        if ($count->count() > 0) {
            session()->flash('message', 'Solo se puede agregar un banner para esta sección');
            $this->cancel();
        }
    }

    public function render()
    {
        return view('livewire.admin.service-banner.service-banner-store');
    }

    public function store()
    {
        $this->validate();
        $banner = new Banner();
        $banner->page = 'services';
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('banners', 'public'));
            $banner->image_source = $image_explode[1];
        }
        if ($banner->save()) {
            $this->cancel();
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.banner_service.index');
    }

}
