<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place = new Place();
        $place->latitude = 0;
        $place->longitude = 0;
        $place->address = 'Mi direccion de mi empresa';
        $place->phone_number = '(51) 559 4454';
        $place->email = 'miempresa@gmail.com';
        $place->business_hours = 'Lun - Vier 8 am a 6 pm.';
        $place->save();
    }
}
