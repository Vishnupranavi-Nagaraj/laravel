<?php

namespace App\Console\Commands;
use App\Employee;
use App\Events\EmployeeMail;
use Illuminate\Console\Command;

class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to the users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = Employee::findOrFail($this->argument('id'));

        event(new EmployeeMail($user));

        $this->info('Email sent to the user');
    }
}
