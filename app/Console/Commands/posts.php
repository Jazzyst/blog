<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Post;

class posts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch posts to array';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $headers = ['title', 'body', 'user_id', 'created_At'];

        $posts = Post::all($headers)->toArray();

        $this->table($headers, $posts);
    }
}
