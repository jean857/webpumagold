<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'qgaray.j@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->assignRole('Admin');



    }
}
