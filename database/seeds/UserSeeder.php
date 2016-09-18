<?php

use Illuminate\Database\Seeder;

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
        DB::table('usuario')->insert([
            'usuario_id' => 1,
            'nombres' => 'admin',
            'apellidos' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'remember_token' => '',
            'tipo_usuario_id' => 1,
        ]);
    }
}
