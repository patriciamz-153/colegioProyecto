<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(InstitutionSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(DepartamentoAcademicoSeeder::class);
        $this->call(EapSeeder::class);
        $this->call(PlanDeEstudioSeeder::class);

        $this->call(TipoEvaluacionSeeder::class);
        $this->call(TipoPeriodoSeeder::class);
        $this->call(TipoAsignaturaSeeder::class);

        $this->call(AsignaturaSeeder::class);
        $this->call(PeriodoAcademicoSeeder::class);
        $this->call(AsignaturaAperturadaSeeder::class);
        $this->call(GrupoSeeder::class);

        $this->call(EvaluacionSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Eloquent::reguard();
    }
}
