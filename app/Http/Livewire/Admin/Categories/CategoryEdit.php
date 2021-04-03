<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public $category_id = '';
    public $name = '';

    protected $rules = [
        'name' => 'required',
    ];

    public function mount($category)
    {
        $this->category_id = $category->id;
        $this->name = $category->name;
    }

    public function render()
    {
        return view('livewire.admin.categories.category-edit');
    }

    public function update()
    {
        $this->validate();
        $new_category = Category::find($this->category_id);
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
