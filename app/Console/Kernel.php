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



            // Obtener todas las tareas que han llegado a su fecha de vencimiento
            // $tasks = Task::where('date_end', '<=', Carbon::now())->get();
            // $id_user = User::getIdUser($param);
            $tasks = Task::select('*')
                ->join('users','users.id', '=', 'tasks.id_user')
                ->where('id_user', '=',$id) //TODO: 1 dinamic
                ->get();
                // '=',1
            // dump($tasks['email']);  

            foreach ($tasks as $task) {
            //     // Obtener el usuario asociado a la tarea
            //     $user = $task->user;
                // dump(gettype($task->email));
                
            //     // Enviar el correo electrónico
                //Mail::to($user->email)->send(new MailWelcome($task));
                Mail::to($task->email)->send(new MailWelcome($task));
                //dump('Schedule make: ');
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
