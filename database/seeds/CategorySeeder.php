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
            'name' => 'Стратегии',
            'category_id' => 1,
        ]);
        App\Category::create([
            'name' => 'Аналитика',
            'category_id' => 2,
        ]);
        App\Category::create([
            'name' => 'Новичкам',
            'category_id' => 3,
        ]);

        App\Category::create([
            'name' => 'Черный список',
            'category_id' => 4,
        ]);
    }
}
