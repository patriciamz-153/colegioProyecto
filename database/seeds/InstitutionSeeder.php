<?php

use Illuminate\Database\Seeder;

use App\Models\Institution;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucion')->truncate();
        DB::table('institucion')->insert([
            ['institucion_id' => 1, 'nombre' => 'Universidad Nacional Mayor de San Marcos', 'siglas' => 'UNMSM'],
            ['institucion_id' => 2, 'nombre' => 'Pontificia Universidad Catolica del Peru', 'siglas' => 'PUCP'],
            ['institucion_id' => 3, 'nombre' => 'Universidad de Ciencias Aplicadas', 'siglas' => 'UPC'],
            ['institucion_id' => 4, 'nombre' => 'Universidad San Ignacio de Loyola', 'siglas' => 'USIL'],
        ]);
    }
}
