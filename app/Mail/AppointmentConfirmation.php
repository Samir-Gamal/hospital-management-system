<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $appointment;

    public function __construct($name,$appointment)
    {
        $this->name=$name;
        $this->appointment=$appointment;
    }

    public function build()
    {
        return $this->markdown('emails.appointments')->subject('تاكيد موعد');
    }
}
