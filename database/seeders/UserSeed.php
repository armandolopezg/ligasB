<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'admin',
                'email'          => 'admin@example.com',
                'password'       => bcrypt('123'),
                'remember_token' => null,
            ],

            [
                'name'           => 'Armando',
                'email'          => 'armando_1320114173@uptecamac.edu.mx',
                'password'       => bcrypt('Justice21'),
                'remember_token' => null,
            ],
        
        ];

        User::insert($users);
    }
}
