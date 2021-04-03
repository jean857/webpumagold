<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryStore extends Component
{
    public $name = '';

    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.categories.category-store');
    }

    public function store(){
        $this->validate();
        $new_category = new Category();
        $new_category->name = $this->name;
        $new_category->save();
        session()->flash('message', 'Post successfully updated.');
        $this->cancel();
    }

    public function cancel()
    {
        return redirect()->route('categories.index');
    }

}
