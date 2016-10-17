<?php

use Illuminate\Database\Seeder;

class ResultadoEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluacion_x_matricula')->truncate();
        DB::table('evaluacion_x_matricula')->insert([
            ['id' => 1, 'evaluacion_id' => 1, 'matricula_id' => 1, 'nota' => 10],
            ['id' => 2, 'evaluacion_id' => 1, 'matricula_id' => 2, 'nota' => 12],
        ]);
    }
}
