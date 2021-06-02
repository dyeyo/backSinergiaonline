<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamentos;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamentos::create(['nombre' =>'Antioquia']);
        Departamentos::create(['nombre' =>'Atlántico']);
        Departamentos::create(['nombre' =>'Bogotá, D.C']);
        Departamentos::create(['nombre' =>'Bolívar']);
        Departamentos::create(['nombre' =>'Boyacá']);
        Departamentos::create(['nombre' =>'Caldas']);
        Departamentos::create(['nombre' =>'Caquetá']);
        Departamentos::create(['nombre' =>'Cauca']);
        Departamentos::create(['nombre' =>'Cesar']);
        Departamentos::create(['nombre' =>'Córdoba']);
        Departamentos::create(['nombre' =>'Cundinamarca']);
        Departamentos::create(['nombre' =>'Chocó']);
        Departamentos::create(['nombre' =>'Huila']);
        Departamentos::create(['nombre' =>'La guajira']);
        Departamentos::create(['nombre' =>'Magdalena']);
        Departamentos::create(['nombre' =>'Meta']);
        Departamentos::create(['nombre' =>'Nariño']);
        Departamentos::create(['nombre' =>'Norte de Santander']);
        Departamentos::create(['nombre' =>'Quindío']);
    }
}
