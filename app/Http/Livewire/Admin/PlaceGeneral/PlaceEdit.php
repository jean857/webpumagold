<?php

namespace App\Http\Livewire\Admin\PlaceGeneral;

use App\Models\Place;
use Livewire\Component;

class PlaceEdit extends Component
{
    public $place_id;
    public $place;
    public $latitude;
    public $longitude;
    public $address = 'Hola';
    public $phone_number;
    public $email;
    public $facebook;
    public $twitter;
    public $instagram;
    public $vimeo;

    protected $rules = [
        'address' => 'required',
        'email' => 'required|email',
    ];


    public function mount($id)
    {
        $this->place_id = $id;
        $place = Place::find($this->place_id);
        $this->latitude = $place->latitude;
        $this->longitude = $place->longitude;
        $this->address = $place->address;
        $this->email = $place->email;
        $this->phone_number = $place->phone_number;
        $this->facebook = $place->facebook;
        $this->twitter = $place->twitter;
        $this->twitter = $place->twitter;
        $this->instagram = $place->instagram;
        $this->vimeo = $place->vimeo;
    }

    public function render()
    {
        return view('livewire.admin.place-general.place-edit');
    }

    public function update()
    {
        $this->validate();
        $place = Place::find($this->place_id);
        $place->address = $this->address;
        $place->email = $this->email;
        $place->phone_number = $this->phone_number;
        $place->save();
        session()->flash('message', 'Post successfully updated.');
        redirect()->route('contact-us-general.index');
    }

    public function cancel()
    {
        return redirect()->route('contact-us-general.index');
    }
}
