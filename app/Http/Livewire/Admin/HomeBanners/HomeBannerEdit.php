<?php

namespace App\Http\Livewire\Admin\HomeBanners;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeBannerEdit extends Component
{
    use WithFileUploads;

    public $banner_id = '';
    public $description = '';
    public $image_source = '';
    public $image_preview = '';

    public function mount($banner)
    {
        $this->banner_id = $banner->id;
        $this->description = $banner->description;
        if (!empty($banner->image_source)) {
            $this->image_preview = url('/storage/banners').'/'.$banner->image_source;
        }

    }

    protected $rules = [
        'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function update()
    {
        $this->validate();
        $banner = Banner::find($this->banner_id);
        $banner->page = 'home';
        $banner->description = $this->description;
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('banners', 'public'));
            $banner->image_source = $image_explode[1];
        }
        $banner->save();
        $this->cancel();
    }


    public function render()
    {
        return view('livewire.admin.home-banners.home-banner-edit');
    }

    public function cancel()
    {
        return redirect()->route('admin.banner_home.index');
    }
}
