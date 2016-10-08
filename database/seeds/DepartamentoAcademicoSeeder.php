<?php

use Illuminate\Database\Seeder;

class DepartamentoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento_academico')->truncate();
        DB::table('departamento_academico')->insert([
            ['id' => 1, 'nombre' => 'Dep. de Ingenieria de Software', 'facultad_id' => 1],
            ['id' => 2, 'nombre' => 'Dep. de Letras', 'facultad_id' => 2],
        ]);

        DB::table('docente_x_departamento')->truncate();
        DB::table('docente_x_departamento')->insert([
            ['id' => 1, 'departamento_id' => 1, 'docente_id' => 2],
        ]);
    }
}
