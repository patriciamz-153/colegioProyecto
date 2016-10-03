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
                'nombre'      => 'sistemas',
                'codigo'      => 1,
                'facultad_id' => 1,
            ],
            [
                'nombre'      => 'software',
                'codigo'      => 2,
                'facultad_id' => 1,
            ],
        ]);
    }
}
