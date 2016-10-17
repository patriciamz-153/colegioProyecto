<?php

use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matricula')->truncate();
        DB::table('matricula')->insert([
            ['id' => 1, 'grupo_id' => 1, 'alumno_id' => 4],
            ['id' => 2, 'grupo_id' => 1, 'alumno_id' => 5],
        ]);
    }
}
