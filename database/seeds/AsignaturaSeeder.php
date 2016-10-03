<?php

use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignatura')->truncate();
        DB::table('asignatura')->insert([
            [
                'id' => 1,
                'nombre' => 'Programacion I',
                'codigo' => 20160101,
                'cantidad_de_creditos' => 4,
                'ciclo' => 2,
                'plan_id' => 1,
                'tipo_id' => 1,
            ],
            [
                'id' => 2,
                'nombre' => 'Programacion II',
                'codigo' => 20160102,
                'cantidad_de_creditos' => 4,
                'ciclo' => 3,
                'plan_id' => 1,
                'tipo_id' => 1,
            ],
        ]);
    }
}
