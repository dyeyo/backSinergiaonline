<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudades;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudades::create(['nombre' =>'Abriaquí']);
        Ciudades::create(['nombre' =>'Abejorral']);
        Ciudades::create(['nombre' =>'Acacías']);
        Ciudades::create(['nombre' =>'Acandí']);
        Ciudades::create(['nombre' =>'Acevedo']);
        Ciudades::create(['nombre' =>'Achí']);
        Ciudades::create(['nombre' =>'Agrado']);
        Ciudades::create(['nombre' =>'Agua de Dios']);
        Ciudades::create(['nombre' =>'Aguachica']);
        Ciudades::create(['nombre' =>'Aguada']);
        Ciudades::create(['nombre' =>'Aguadas']);
        Ciudades::create(['nombre' =>'Aguazul']);
        Ciudades::create(['nombre' =>'Agustín Codazzi']);
        Ciudades::create(['nombre' =>'Aipe']);
        Ciudades::create(['nombre' =>'Albania']);
        Ciudades::create(['nombre' =>'Albania']);
        Ciudades::create(['nombre' =>'Albania']);
        Ciudades::create(['nombre' =>'Albán']);
        Ciudades::create(['nombre' =>'Albán (San José)']);
        Ciudades::create(['nombre' =>'Alcalá']);
        Ciudades::create(['nombre' =>'Alejandria']);
        Ciudades::create(['nombre' =>'Algarrobo']);
        Ciudades::create(['nombre' =>'Algeciras']);
        Ciudades::create(['nombre' =>'Almaguer']);
        Ciudades::create(['nombre' =>'Almeida']);
        Ciudades::create(['nombre' =>'Alpujarra']);
        Ciudades::create(['nombre' =>'Altamira']);
        Ciudades::create(['nombre' =>'Alto Baudó (Pie de Pato)']);
        Ciudades::create(['nombre' =>'Altos del Rosario']);
    }
}
