<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->truncate();
        User::create([
            'id' => 1,
            'nombres' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 1,
        ]);
        User::create([
            'id' => 2,
            'nombres' => 'docente',
            'apellidos' => 'prueba',
            'email' => 'prueba@docente.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 3,
        ]);
        User::create([
            'id' => 3,
            'nombres' => 'docente 2',
            'apellidos' => 'prueba 2',
            'email' => 'prueba2@docente.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 3,
        ]);
        DB::table('docente')->truncate();
        DB::table('docente')->insert([
            ['id' => 2],
            ['id' => 3],
        ]);
    }
}
