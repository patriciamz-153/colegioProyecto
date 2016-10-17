<?php

use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ambiente')->truncate();
        DB::table('ambiente')->insert([
            ['id' => 1, 'tipo_id' => 1, 'nombre' => '101', 'facultad_x_sede_id' => 1],
            ['id' => 2, 'tipo_id' => 1, 'nombre' => '103', 'facultad_x_sede_id' => 1],
            ['id' => 3, 'tipo_id' => 1, 'nombre' => '105', 'facultad_x_sede_id' => 2],
            ['id' => 4, 'tipo_id' => 1, 'nombre' => '107', 'facultad_x_sede_id' => 2],
            ['id' => 5, 'tipo_id' => 2, 'nombre' => 'Lab-01', 'facultad_x_sede_id' => 2],
            ['id' => 6, 'tipo_id' => 4, 'nombre' => 'Ella Dumbar', 'facultad_x_sede_id' => 2],
        ]);
    }
}
