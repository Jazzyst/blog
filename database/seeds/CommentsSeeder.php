<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Comments::create([
            'user_id' => 1,
            'post_id'  => 1,
            'body' => 'Комментарий к статье на главной ( первонах )',
        ]);
        App\Comments::create([
            'user_id' => 1,
            'post_id'  => 2,
            'body' => 'Комментарий к новости, пусть она будет трагичной',
        ]);
        App\Comments::create([
            'user_id' => 1,
            'post_id'  => 3,
            'body' => 'Комментарий к чему угодно, говорят айфоны подорожают',
        ]);
    }
}
