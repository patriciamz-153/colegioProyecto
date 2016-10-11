<?php

use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultad_x_sede')->truncate();
        DB::table('sede')->truncate();
        DB::table('distrito')->truncate();
        DB::table('provincia')->truncate();
        DB::table('departamento')->truncate();

        DB::table('departamento')->insert([
            ['id' => 1, 'nombre' => 'Lima'],
        ]);

        DB::table('provincia')->insert([
            ['id' => 1, 'nombre' => 'Lima', 'departamento_id' => 1],
        ]);

        DB::table('distrito')->insert([
            ['id' => 1, 'nombre' => 'Lima', 'provincia_id' => 1],
        ]);

        DB::table('sede')->insert([
            [
                'id' => 1,
                'nombre' => 'Ciudad Universitaria',
                'direccion' => 'Av ...',
                'institucion_id' => 1,
                'distrito_id' => 1,
            ],
            [
                'id' => 2,
                'nombre' => 'San Fernando',
                'direccion' => 'Av ...',
                'institucion_id' => 1,
                'distrito_id' => 1,
            ],
        ]);

        DB::table('facultad_x_sede')->insert([
            [
                'id' => 1,
                'sede_id' => 1,
                'facultad_id' => 1,
            ],
            [
                'id' => 2,
                'sede_id' => 1,
                'facultad_id' => 2,
            ],
        ]);
    }
}
