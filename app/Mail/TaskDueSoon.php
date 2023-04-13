<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TaskDueSoon extends Mailable
{
    use Queueable, SerializesModels;

    protected $name_task;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name_task)
    {
        $this->name_task = $name_task;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Task Due Soon',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return $this->from('angeldavidve@gmail.com', 'Angel')
            ->subject(this->name_task)
            ->view('emails.avisoTask')
            ->with([
                'name_task' => $this->name_task
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
