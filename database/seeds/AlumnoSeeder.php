<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::create([
            'id' => 4,
            'nombres' => 'alumno A',
            'apellidos' => 'prueba A',
            'email' => 'prueba@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);
        User::create([
            'id' => 5,
            'nombres' => 'alumno B',
            'apellidos' => 'prueba B',
            'email' => 'prueba2@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);

        DB::table('alumno')->truncate();
        DB::table('alumno')->insert([
            ['id' => 4, 'codigo' =>'12200100', 'escuela_id' => 1],
            ['id' => 5, 'codigo' =>'12200101', 'escuela_id' => 1],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
