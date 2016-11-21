<?php

use Illuminate\Database\Seeder;

use App\Models\Usuario;

class nuevoUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario::create([
            'id' => 6,
            'nombres' => 'alumno C',
            'apellidos' => 'prueba C',
            'email' => 'prueba3@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);
        Usuario::create([
            'id' => 7,
            'nombres' => 'alumno D',
            'apellidos' => 'prueba D',
            'email' => 'prueba4@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);
        Usuario::create([
            'id' => 8,
            'nombres' => 'alumno E',
            'apellidos' => 'prueba E',
            'email' => 'prueba5@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);
    }
}
