<?php

namespace App\Http\Livewire\Admin\Highlights;

use App\Models\Highlight;
use Livewire\Component;

class HighlightStore extends Component
{

    public $title;
    public $description;
    public $icon = '';

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'icon' => 'required'
    ];

    public function render()
    {
        return view('livewire.admin.highlights.highlight-store');
    }

    public function store()
    {
        $this->validate();
        $newHighlight = new Highlight();
        $newHighlight->title = $this->title;
        $newHighlight->description = $this->description;
        $newHighlight->icon = $this->icon;
        if ($newHighlight->save()) {
            $this->cancel();
        }

    }

    public function cancel()
    {
        return redirect()->route('admin.highlights.index');
    }
}
