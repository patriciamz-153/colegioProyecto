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
                'nombre' => 'Plan 2012',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2012,
                'escuela_id' => 1,
            ],
            [
                'nombre' => 'Plan 2009',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2009,
                'escuela_id' => 2,
            ],
            [
                'nombre' => 'Plan 2008',
                'esta_vigente' => false,
                'anio_de_publicacion' => 2008,
                'escuela_id' => 1,
            ],
            [
                'nombre' => 'Plan 2015',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2015,
                'escuela_id' => 2,
            ],
            [
                'nombre' => 'Plan 2000',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2000,
                'escuela_id' => 3,
            ],
            [
                'nombre' => 'Plan 2005',
                'esta_vigente' => true,
                'anio_de_publicacion' => 2005,
                'escuela_id' => 4,
            ],
        ]);
    }
}
