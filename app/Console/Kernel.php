<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\Task;
use App\Mail\MailWelcome;
use App\Models\User;



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
        

        $schedule->call(function () {


            $fecha_actual = date('Y-m-d 00:00:00');
            $fecha_fin = date('Y-m-d 23:59:59');

            
            $tasks = Task::where('date_end', '=', $fecha_actual)
                ->where('date_end', '=', $fecha_fin)
                ->dd();

            foreach ($tasks as $task) {
            
                Mail::to($task->email)->send(new MailWelcome($task));
                // dump('Schedule make:');
            }
        })->everyMinute();
    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */

    protected function commands()
    {

    }
}



//     // Obtener el usuario asociado a la tarea
            //     $user = $task->user;
            //  dump(gettype($task->email));
            //     // Enviar el correo electrónico
            //Mail::to($user->email)->send(new MailWelcome($task));


            // $tasks = Task::find($request->session()->get('date_end')); // Obtén el usuario que deseas filtrar
            // $date_end = $tasks->date_end;
            
            // // $tasks = Task::whereDate('date_end', '=', now()->toDateString())->get();

            //     $tasks = Task::select('*')
            //      ->where('DATE(date_end)', '=',DATE(now())) //TODO: 1 dinamic
            //      ->get();
                // '=',1
            // dump($tasks['email']); 