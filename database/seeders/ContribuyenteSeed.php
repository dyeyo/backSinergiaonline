<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoContribuyente;

class ContribuyenteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoContribuyente::create(['nombre' =>'Personas Físicas']);
        TipoContribuyente::create(['nombre' =>'Persona Jurídica o Moral:']);

    }
}
