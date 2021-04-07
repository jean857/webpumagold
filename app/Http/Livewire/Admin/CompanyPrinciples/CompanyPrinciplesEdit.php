<?php

namespace App\Http\Livewire\Admin\CompanyPrinciples;

use App\Models\CompanyPrinciple;
use Livewire\Component;

class CompanyPrinciplesEdit extends Component
{
    public $company_id = '';
    public $description = '';
    public $mission = '';
    public $vision = '';
    public $environment = '';

    protected $rules = [
        'description' => 'required',
        'mission' => 'required',
        'vision' => 'required',
    ];

    public function mount($companyPrinciple)
    {
        $this->company_id = $companyPrinciple->id;
        $this->description = $companyPrinciple->description;
        $this->mission = $companyPrinciple->mission;
        $this->vision = $companyPrinciple->vision;
        $this->environment = $companyPrinciple->environment;
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
        $update_company->save();
        session()->flash('message', 'Post successfully updated.');
        $this->cancel();
    }

    public function cancel()
    {
        return redirect()->route('admin.company_principles.index');
    }
}
