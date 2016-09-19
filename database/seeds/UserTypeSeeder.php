<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuario')->truncate();
        DB::table('tipo_usuario')->insert([
            ['id' => 1, 'nombre' => 'Admin'],
            ['id' => 2, 'nombre' => 'Estudiante'],
            ['id' => 3, 'nombre' => 'Profesor'],
        ]);
    }
}
