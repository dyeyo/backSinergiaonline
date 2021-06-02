<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoListas;

class TipoListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoListas::create(['nombre' =>'tipo_identificacion']);
        TipoListas::create(['nombre' =>'tipo_tercero']);
        TipoListas::create(['nombre' =>'ciudad']);
        TipoListas::create(['nombre' =>'tipo_contribuyente']);
    }
}
