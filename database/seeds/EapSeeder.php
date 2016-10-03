<?php

use Illuminate\Database\Seeder;

class EapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eap')->truncate();

        DB::table('eap')->insert([
            [
                'nombre'      => 'Sistemas',
                'codigo'      => 1,
                'facultad_id' => 1,
            ],
            [
                'nombre'      => 'Software',
                'codigo'      => 2,
                'facultad_id' => 1,
            ],
            [
                'nombre'      => 'Arte',
                'codigo'      => 1,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Bibliotecologia y Ciencias de la Informacion',
                'codigo'      => 2,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Comunicacion Social',
                'codigo'      => 3,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Conservacion y Restauracion',
                'codigo'      => 4,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Danza',
                'codigo'      => 5,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Filosofia',
                'codigo'      => 6,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Lingüistica',
                'codigo'      => 7,
                'facultad_id' => 2,
            ],
            [
                'nombre'      => 'Literatura',
                'codigo'      => 8,
                'facultad_id' => 2,
            ],
        ]);
    }
}
