<?php


namespace App\Http\View\Composers;


use App\Models\Place;
use Illuminate\View\View;

class PlaceComposer
{
    public function compose(View $view)
    {
        $place = Place::first();
        $view->with(['place' => $place]);
    }
}
