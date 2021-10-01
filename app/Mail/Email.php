<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$phone,$subject,$message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->from($this->email)
                    ->subject($this->subject)
                    ->view('email.contact-email')->with([
                        'name' =>$this->name,
                        'email' =>$this->email,
                        'phone' =>$this->phone,
                        'subject' => $this->subject,
                        'message' =>  $this->message,
                    ]);
    }
}
