<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Mail\Mailable;
use App\Mail\UserEmailNotification;

class MailEvent
{
    public $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        //
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        echo "from handle method";

        $this->mailer->to($event->user->email)
            ->send(new UserEmailNotification($event->user));
    }
}
