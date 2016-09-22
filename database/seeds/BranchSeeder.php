<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sede')->truncate();
        DB::table('distrito')->truncate();
        DB::table('provincia')->truncate();

        DB::table('provincia')->insert([
            ['id' => 1, 'nombre' => 'Lima'],
        ]);

        DB::table('distrito')->insert([
            ['id' => 1, 'nombre' => 'Lima', 'provincia_id' => 1],
        ]);

        DB::table('sede')->insert([
            [
                'id' => 1,
                'nombre' => 'Ciudad Universitaria',
                'direccion' => 'Av ...',
                'institucion_id' => 1,
                'distrito_id' => 1,
            ],
            [
                'id' => 2,
                'nombre' => 'San Fernando',
                'direccion' => 'Av ...',
                'institucion_id' => 1,
                'distrito_id' => 1,
            ],
        ]);
    }
}
