<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContribuyenteSeed::class);
        $this->call(CiudadesSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(TipoListasSeeder::class);
        $this->call(ElementosListasSeeder::class);
    }
}
