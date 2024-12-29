<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class DeployApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deploy:app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    Artisan::call('migrate', ['--force' => true]);
    Artisan::call('db:seed', ['--class' => 'AdminTableSeeder', '--force' => true]);
    $this->info('Migrations and seeding completed.');
}

}
