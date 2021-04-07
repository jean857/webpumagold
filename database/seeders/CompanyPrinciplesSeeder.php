<?php

namespace Database\Seeders;

use App\Models\CompanyPrinciple;
use Illuminate\Database\Seeder;

class CompanyPrinciplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new CompanyPrinciple();
        $company->description = 'Mi descripcion de la empresa';
        $company->mission = 'Mi mision';
        $company->vision = 'Mi vision';
        $company->environment = 'Medio ambiente';
        $company->save();
    }
}
