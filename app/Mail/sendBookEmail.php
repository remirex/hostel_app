<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendBookEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $date_in;
    public $date_out;
    public $room_id;

    public function __construct($name,$email,$date_in,$date_out,$room_id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->date_in = $date_in;
        $this->date_out = $date_out;
        $this->room_id = $room_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hostel_app@laravel5.dev')
            ->view('email.bookmail');
    }
}
