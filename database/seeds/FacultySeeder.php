<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultad')->truncate();
        DB::table('facultad')->insert([
            ['id' => 1, 'nombre' => 'FISI', 'codigo' => '20', 'institucion_id' => 1],
            ['id' => 2, 'nombre' => 'Letras', 'codigo' => '5', 'institucion_id' => 1],
        ]);
    }
}
