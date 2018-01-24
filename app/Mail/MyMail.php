<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $content_message;
    public $content_name;

    public function __construct($content_message, $content_name)
    {
        $this->content_message = $content_message;
        $this->content_name = $content_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hostel_app@laravel5.dev')
                    ->view('email.mymail');
    }
}
