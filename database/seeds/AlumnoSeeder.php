<?php

use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno')->truncate();
        DB::table('alumno')->insert([
            ['id' => 4, 'codigo' =>'12200100', 'escuela_id' => 1],
            ['id' => 5, 'codigo' =>'12200101', 'escuela_id' => 1],
        ]);
    }
}
