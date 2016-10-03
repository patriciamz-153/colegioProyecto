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

        $this->call(InstitutionSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EapSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Eloquent::reguard();
    }
}
