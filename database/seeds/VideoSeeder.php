<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Video::create([
            'url' => 'http://youtube.com/watch/something',
            'name'  => 'Video 1',
        ]);

        App\Video::create([
            'url' => 'http://youtube.com/watch/something2',
            'name'  => 'Video 2',
        ]);

        App\Video::create([
            'url' => 'http://youtube.com/watch/something3',
            'name'  => 'Video 3',
        ]);

        App\Video::create([
            'url' => 'http://youtube.com/watch/something4',
            'name'  => 'Video 4',
        ]);

        App\Video::create([
            'url' => 'http://youtube.com/watch/something4',
            'name'  => 'Video 5',
        ]);
    }
}
