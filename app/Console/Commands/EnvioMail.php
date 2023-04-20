<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Mail;
use App\Models\Task;
use App\Mail\MailWelcome;
use App\Models\User;
use Illuminate\Console\Command;

class EnvioMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'envio:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            $fecha_actual = date('Y-m-d 00:00:00');
            $fecha_fin = date('Y-m-d 23:59:59');

            
            $tasks = Task::where('date_ini', '>=', $fecha_actual)
                ->where('date_end', '<=', $fecha_fin)
                ->get();
                // dd($tasks);
            foreach ($tasks as $task) {
                
                Mail::to('angeldavidve@gmail.com')->send(new MailWelcome($task));
                // dump('Schedule make:');
            }
        return Command::SUCCESS;
    }
}
