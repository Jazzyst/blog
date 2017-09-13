<?php

use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'Главная',
            'category_id' => 1,
        ]);
        App\Category::create([
            'name' => 'Новости',
            'category_id' => 2,
        ]);
        App\Category::create([
            'name' => 'Что угодно',
            'category_id' => 3,
        ]);
    }
}
