<?php

use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluacion')->truncate();
        DB::table('evaluacion')->insert([
            [
                'id' => 1,
                'fecha' => '2016-10-04',
                'hora_inicio' => '18:00:00',
                'hora_fin' => '20:00:00',
                'peso' => 0.3,
                'grupo_id' => 1,
                'tipo_id' => 3,
            ],
            [
                'id' => 2,
                'fecha' => '2016-12-04',
                'hora_inicio' => '18:00:00',
                'hora_fin' => '20:00:00',
                'peso' => 0.3,
                'grupo_id' => 1,
                'tipo_id' => 4,
            ]
        ]);
    }
}
