<?php

use Illuminate\Database\Seeder;

use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('usuario')->truncate();
        Usuario::create([
            'id' => 1,
            'nombres' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 1,
        ]);
        Usuario::create([
            'id' => 2,
            'nombres' => 'docente',
            'apellidos' => 'prueba',
            'email' => 'prueba@docente.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 3,
        ]);
        Usuario::create([
            'id' => 3,
            'nombres' => 'docente 2',
            'apellidos' => 'prueba 2',
            'email' => 'prueba2@docente.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 3,
        ]);
        Usuario::create([
            'id' => 4,
            'nombres' => 'alumno A',
            'apellidos' => 'prueba A',
            'email' => 'prueba@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);
        Usuario::create([
            'id' => 5,
            'nombres' => 'alumno B',
            'apellidos' => 'prueba B',
            'email' => 'prueba2@alumno.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 2,
        ]);

        //DB::table('docente')->truncate();
        DB::table('docente')->insert([
            ['id' => 2],
            ['id' => 3],
        ]);
    }
}
    