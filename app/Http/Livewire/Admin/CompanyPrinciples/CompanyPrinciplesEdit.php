<?php

namespace App\Http\Livewire\Admin\CompanyPrinciples;

use App\Models\CompanyPrinciple;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyPrinciplesEdit extends Component
{
    use WithFileUploads;

    public $company_id = '';
    public $description = '';
    public $mission = '';
    public $vision = '';
    public $environment = '';
    public $image_source = '';
    public $image_preview = '';

    protected $rules = [
        'description' => 'required',
        'mission' => 'required',
        'vision' => 'required',
        'image_source' => 'image|mimes:jpg,jpeg,png|max:1024',
    ];

    public function mount($companyPrinciple)
    {
        $this->company_id = $companyPrinciple->id;
        $this->description = $companyPrinciple->description;
        $this->mission = $companyPrinciple->mission;
        $this->vision = $companyPrinciple->vision;
        $this->environment = $companyPrinciple->environment;
        if (!empty($companyPrinciple->image_source)) {
            $this->image_preview = url('/storage/company').'/'.$companyPrinciple->image_source;
        }

    }

    public function render()
    {
        return view('livewire.admin.company-principles.company-principles-edit');
    }

    public function update()
    {
        $this->validate();
        $update_company = CompanyPrinciple::find($this->company_id);
        $update_company->description = $this->description;
        $update_company->mission = $this->mission;
        $update_company->vision = $this->vision;
        $update_company->environment = $this->environment;
        if ($this->image_source != '') {
            $image_explode = explode('/', $this->image_source->store('company', 'public'));
            $update_company->image_source = $image_explode[1];
        }
        $update_company->save();
        session()->flash('message', 'Post successfully updated.');
        $this->cancel();
    }

    public function cancel()
    {
        return redirect()->route('admin.company_principles.index');
    }
}
