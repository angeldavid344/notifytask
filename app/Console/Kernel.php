<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Task;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('PostCommand')->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected $commands = [
    
        Commands\PostCommand::class
    ];


    protected function commands()
    {

    }
}
