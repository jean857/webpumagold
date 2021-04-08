<?php

namespace App\Http\Livewire\Admin\HomeBanners;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeBannerStore extends Component
{
    use WithFileUploads;

    public $image_source = '';
    public $description = '';

    protected $rules = [
        'image_source' => 'required|image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function render()
    {
        return view('livewire.admin.home-banners.home-banner-store');
    }

    public function store()
    {
        $this->validate();
        $banner = new Banner();
        $banner->page = 'home';
        $banner->description = $this->description;
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
        return redirect()->route('admin.banner_home.index');
    }

}
