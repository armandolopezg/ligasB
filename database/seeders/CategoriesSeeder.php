<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Micro'],
            ['name' => 'Mini'],
            ['name' => 'Pasarela'],
            ['name' => 'Cadete'],
            ['name' => 'Juvenil'],
        ];

        Categories::insert($categories);
    }
}
