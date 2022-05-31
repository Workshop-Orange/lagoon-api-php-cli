<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;
use LaravelZero\Framework\Commands\Command;
use Symfony\Component\Console\Logger\ConsoleLogger;
use WorkshopOrange\LagoonApiPhpClient\Client;

class Login extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'login';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Login to lagoon';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client(Log::getLogger());
        $client->login();
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
