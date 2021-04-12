<?php


namespace App\Http\View\Composers;


use App\Models\Category;
use Illuminate\View\View;

class ServicesComposer
{
    public function compose(View $view)
    {
        $category_services = Category::with([
            'services' => function ($query) {
                $query->select(['id', 'category_id', 'name', 'slug']);
                $query->where('published', 1);
            }
        ])->whereHas('services')->get(['id', 'name']);
        $view->with(['category_services' => $category_services]);
    }
}
