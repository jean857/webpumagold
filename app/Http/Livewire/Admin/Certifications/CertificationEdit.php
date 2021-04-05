<?php

namespace App\Http\Livewire\Admin\Certifications;

use App\Models\Certification;
use Livewire\Component;
use Livewire\WithFileUploads;

class CertificationEdit extends Component
{
    use WithFileUploads;

    public $certification_id;
    public $name;
    public $image_source = '';
    public $image_preview = '';
    public $description;

    protected $rules = [
        'name' => 'required|unique:services',
        'description' => 'required',
        'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function mount($certification)
    {
        $this->certification_id = $certification->id;
        $this->name = $certification->name;
        $this->image_preview = url('/storage/certifications').'/'.$certification->image_source;
        $this->description = $certification->description;
    }

    public function render()
    {
        return view('livewire.admin.certifications.certification-edit');
    }

    public function update()
    {
        $this->validate();
        $certification = Certification::find($this->certification_id);
        $certification->name = $this->name;
        $certification->description = $this->description;
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('certifications', 'public'));
            $certification->image_source = $image_explode[1];
        }
        if($certification->save()){
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('certifications.index');
    }
}
