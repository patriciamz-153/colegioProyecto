<?php

use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo')->truncate();
        DB::table('grupo')->insert([
            [
                'id' => 1,
                'numero_grupo' => 1,
                'asignatura_aperturada_id' => 1,
                'docente_id' => 2,
            ],
            [
                'id' => 2,
                'numero_grupo' => 1,
                'asignatura_aperturada_id' => 1,
                'docente_id' => 3,
            ],
        ]);
    }
}
