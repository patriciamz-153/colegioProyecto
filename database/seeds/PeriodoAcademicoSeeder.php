<?php

use Illuminate\Database\Seeder;

class PeriodoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodo_academico')->truncate();
        DB::table('periodo_academico')->insert([
            [
                'id' => 1,
                'nombre' => '2016-I',
                'fecha_inicio' => '2016-04-01',
                'fecha_fin' => '2016-08-01',
                'facultad_id' => 1,
                'tipo_id' => 1,
            ],
            [
                'id' => 2,
                'nombre' => '2016-II',
                'fecha_inicio' => '2016-09-01',
                'fecha_fin' => '2016-12-01',
                'facultad_id' => 1,
                'tipo_id' => 1,
            ],
        ]);
    }
}
