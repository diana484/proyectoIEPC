<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = User::create([
            'name' => 'Darwin Perez Albores',
            'email' => 'perezalboresd@gmail.com',
            'password' => bcrypt('123456'),
            'tipouser' => 'administrador',
        ]);

        $administrador->assignRole('admin');

    }
}
