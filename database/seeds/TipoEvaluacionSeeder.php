<?php

use Illuminate\Database\Seeder;

class TipoEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_evaluacion')->truncate();
        DB::table('tipo_evaluacion')->insert([
            ['id' => 1, 'nombre' => 'Practica'],
            ['id' => 2, 'nombre' => 'Exposicion'],
            ['id' => 3, 'nombre' => 'Examen Parcial'],
            ['id' => 4, 'nombre' => 'Examen Final'],
            ['id' => 5, 'nombre' => 'Trabajo de Campo'],
        ]);
    }
}
