<?php

use Illuminate\Database\Seeder;

class PlanDeEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan_de_estudio')->truncate();
        DB::table('plan_de_estudio')->insert([
            [
                'id' => 1,
                'nombre' => 'Plan 2012',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2012,
                'escuela_id' => 1,
            ]
        ]);
    }
}
