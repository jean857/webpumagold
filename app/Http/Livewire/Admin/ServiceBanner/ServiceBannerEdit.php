<?php

namespace App\Http\Livewire\Admin\ServiceBanner;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceBannerEdit extends Component
{
    use WithFileUploads;

    public $banner_id = '';
    public $image_source = '';
    public $image_preview = '';

    public function mount($banner)
    {
        $this->banner_id = $banner->id;
        if (!empty($banner->image_source)) {
            $this->image_preview = url('/storage/banners').'/'.$banner->image_source;
        }

    }

    protected $rules = [
        'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
    ];


    public function render()
    {
        return view('livewire.admin.service-banner.service-banner-edit');
    }

    public function update()
    {
        $this->validate();
        $banner = Banner::find($this->banner_id);
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('banners', 'public'));
            $banner->image_source = $image_explode[1];
        }
        $banner->save();
        $this->cancel();
    }

    public function cancel()
    {
        return redirect()->route('admin.banner_service.index');
    }
}
