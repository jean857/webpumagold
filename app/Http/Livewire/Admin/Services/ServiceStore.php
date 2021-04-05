<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceStore extends Component
{
    use WithFileUploads;

    public $name;
    public $category_id = null;
    public $image_source = '';
    public $published = false;
    public $description;

    protected $rules = [
        'name' => 'required|unique:services',
        'published' => 'required',
        'category_id' => 'required|integer',
        'description' => 'required',
        'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.services.service-store', compact('categories'));
    }

    public function store()
    {
        $this->validate();
        $image_explode = explode('/',$this->image_source->store('services','public'));
        $newService = new Service();
        $newService->category_id = $this->category_id;
        $newService->name = $this->name;
        $newService->description = $this->description;
        $newService->published = $this->published;
        $newService->image_source = $image_explode[1];
        if($newService->save()){
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('services.index');
    }

}
