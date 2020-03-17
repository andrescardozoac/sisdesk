<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmergencyCallReceived extends Mailable
{

    use Queueable, SerializesModels;

    public $distressCall;

    public function __construct(User $user)
    {
        $this->User = $user;
    }

    public function build()
    {
        return $this->view('mails.emergency_call');
    }
}
