<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            'title' => 'Привет рад тебя видеть',
            'body'  => 'Ты только что запустил сидирование,какой же ты молодец',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        App\Post::create([
            'title' => 'Ты знаешь что у нас тут за движуха?',
            'body'  => 'я тебе расскажу,только шепотом,наклонись к монитору',
            'category_id' => 1,
            'user_id' => 2,
        ]);
        App\Post::create([
            'title' => 'Великолепный заголовок для новости',
            'body'  => 'Еще более замечательный текст с пояснениями что происходит',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        App\Post::create([
            'title' => 'Что угодно и все остальное',
            'body'  => 'Тут у нас царит хаос и гомора',
            'category_id' => 3,
            'user_id' => 1,
        ]);
    }
}
