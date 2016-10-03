<?php

use Illuminate\Database\Seeder;

class TipoPeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_periodo')->truncate();
        DB::table('tipo_periodo')->insert([
            ['id' => 1, 'nombre' => 'Semestral'],
            ['id' => 2, 'nombre' => 'Anual'],
            ['id' => 3, 'nombre' => 'Veranito'],
        ]);
    }
}
