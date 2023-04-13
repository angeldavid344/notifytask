<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\mail\TaskDueSoon;
use Illuminate\Support\Facades\Mail;
use App\Models\Task;

use Illuminate\Support\Facades\Log;

class Logger implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public Task $task)
    {
        //
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $mailWelcome = new MailWelcome($this->task);
        Mail::to('angeldavidve@gmail.com')->send($mailWelcome);
    }   
}
