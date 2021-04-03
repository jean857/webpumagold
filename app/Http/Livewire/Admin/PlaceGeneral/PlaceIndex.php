<?php

namespace App\Http\Livewire\Admin\PlaceGeneral;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithPagination;

class PlaceIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {


        return view('livewire.admin.place-general.place-index');
    }
}
