<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ElementosListas;

class ElementosListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ElementosListas::create(['nombre' =>'cedula de ciudadania','tipo_lista_id'=>1]);
        ElementosListas::create(['nombre' =>'tarjeta de identidad','tipo_lista_id'=>1]);
        ElementosListas::create(['nombre' =>'paciente','tipo_lista_id'=>2]);
        ElementosListas::create(['nombre' =>'empleado','tipo_lista_id'=>2]);
        ElementosListas::create(['nombre' =>'contratista','tipo_lista_id'=>2]);
        ElementosListas::create(['nombre' =>'otro','tipo_lista_id'=>2]);
        ElementosListas::create(['nombre' =>'gran contribuyente','tipo_lista_id'=>4]);
        ElementosListas::create(['nombre' =>'responsable de IVA','tipo_lista_id'=>4]);
        ElementosListas::create(['nombre' =>'régimen especial','tipo_lista_id'=>4]);
        ElementosListas::create(['nombre' =>'otro','tipo_lista_id'=>4]);
       
    }
}
