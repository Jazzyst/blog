<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing migrate && run seeds';

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
        $install = $this->ask('You trying install, you sure?', true);
        $this->confirm('Installing, do you wish confirm?',false);
        if($install)
        {
            Artisan::call('migrate:fresh');
            Artisan::call('db:seed');
            echo Artisan::output();

        }
    }
}
