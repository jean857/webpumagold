<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceEdit extends Component
{
    use WithFileUploads;

    public $service_id;
    public $name;
    public $category_id = null;
    public $image_source = '';
    public $published = false;
    public $image_preview = '';
    public $description;

    protected array $rules = [];

    public function mount($service)
    {
        $this->service_id = $service->id;
        $this->name = $service->name;
        $this->category_id = $service->category_id;
        $this->image_preview = url('/storage/services').'/'.$service->image_source;
        $this->published = $service->published;
        $this->description = $service->description;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:services,name,'.$this->service_id,
            'published' => 'required',
            'category_id' => 'required|integer',
            'description' => 'required',
            'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
        ];
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.services.service-edit', compact('categories'));
    }

    public function update()
    {
        $this->validate();
        $service = Service::find($this->service_id);
        $service->category_id = $this->category_id;
        $service->name = $this->name;
        $service->description = $this->description;
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('services', 'public'));
            $service->image_source = $image_explode[1];
        }
        $service->published = $this->published;
        if($service->save()){
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('services.index');
    }
}
