<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermission::class);
        $this->call(UsersTablesSeeder::class);
        $this->call(ciudadanoSeeder::class);
        //$this->call(DistritacionSeeder::class);
    }
}
