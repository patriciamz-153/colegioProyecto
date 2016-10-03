<?php

use Illuminate\Database\Seeder;

class TipoAsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_asignatura')->truncate();
        DB::table('tipo_asignatura')->insert([
            ['id' => 1, 'descripcion' => 'Obligatorio'],
            ['id' => 2, 'descripcion' => 'Electivo'],
        ]);
    }
}
