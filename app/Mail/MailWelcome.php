<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\models\Task;
use App\model\User;

class MailWelcome extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $User;
    public $task;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct(Task $task)
    {
        $this->task = $task;
        
    }

    public function build()
    {
        return $this->subject('Mail from Web-tuts.com')
                    ->view('emails.avisoTask');

    }
}
