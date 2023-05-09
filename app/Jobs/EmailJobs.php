<?php

namespace App\Jobs;

use App\Employee;
use App\Http\Controllers\EmployeeController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class EmailJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email =  $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->email;

        Mail::send('welcome', ['id'=>'$user'], function($message) use ($user) {
            $message->from($user['email']);
            $message->to('jaya.naga@aspiresys.com');
            $message->subject('Hello Team');
        });
    }
}
