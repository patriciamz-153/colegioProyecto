<?php

use Illuminate\Database\Seeder;

class TipoAmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_ambiente')->truncate();
        DB::table('tipo_ambiente')->insert([
            ['id' => 1, 'nombre' => 'Aula'],
            ['id' => 2, 'nombre' => 'Laboratorio'],
            ['id' => 3, 'nombre' => 'Hospital'],
            ['id' => 4, 'nombre' => 'Auditorio'],
        ]);
    }
}
