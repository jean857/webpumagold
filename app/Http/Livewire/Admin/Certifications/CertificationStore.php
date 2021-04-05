<?php

namespace App\Http\Livewire\Admin\Certifications;

use App\Models\Certification;
use Livewire\Component;
use Livewire\WithFileUploads;

class CertificationStore extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image_source = '';

    protected $rules = [
        'name' => 'required|unique:services',
        'description' => 'required',
        'image_source' => 'required|image|mimes:jpg,jpeg,png|max:1024',
    ];


    public function render()
    {
        return view('livewire.admin.certifications.certification-store');
    }

    public function store()
    {
        $this->validate();
        $image_explode = explode('/',$this->image_source->store('certifications','public'));
        $newService = new Certification();
        $newService->name = $this->name;
        $newService->description = $this->description;
        $newService->image_source = $image_explode[1];
        if($newService->save()){
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('certifications.index');
    }
}
