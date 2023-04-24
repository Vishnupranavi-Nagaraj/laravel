<?php

namespace App\Listeners;

use App\Employee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\EmployeeMail;
use Mail;

class MailEvent
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EmployeeMail $event)
    {
        $user = $event->email;

        Mail::send('welcome', ['id'=>'$user'], function($message) use ($user) {
            $message->from($user['email']);
            $message->to('anisha.naga@aspiresys.com');
            $message->subject('Hello Team');
        });
    }
}
