<?php

use Illuminate\Database\Seeder;

class AsignaturaAperturadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignatura_aperturada')->truncate();
        DB::table('asignatura_aperturada')->insert([
            ['id' => 1, 'asignatura_id' => 1, 'periodo_id' => 1],
            ['id' => 2, 'asignatura_id' => 2, 'periodo_id' => 1],
        ]);
    }
}
