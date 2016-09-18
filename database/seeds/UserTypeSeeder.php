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
            ['tipo_usuario_id' => 1, 'nombre' => 'Admin'],
            ['tipo_usuario_id' => 2, 'nombre' => 'Estudiante'],
            ['tipo_usuario_id' => 3, 'nombre' => 'Profesor'],
        ]);
    }
}
