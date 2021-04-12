<?php

namespace App\Http\Livewire\Admin\Highlights;

use App\Models\Highlight;
use Livewire\Component;

class HighlightEdit extends Component
{
    public $highlight_id;
    public $title;
    public $description;
    public $icon;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'icon' => 'required'
    ];

    public function mount($highlight)
    {
        $this->highlight_id = $highlight->id;
        $this->title = $highlight->title;
        $this->description = $highlight->description;
        $this->icon = $highlight->icon;

    }

    public function render()
    {
        return view('livewire.admin.highlights.highlight-edit');
    }

    public function update()
    {
        $this->validate();
        $high = Highlight::find($this->highlight_id);
        $high->title = $this->title;
        $high->description = $this->description;
        $high->icon = $this->icon;
        if($high->save()){
            $this->cancel();
        }
    }

    public function cancel()
    {
        return redirect()->route('admin.highlights.index');
    }
}
