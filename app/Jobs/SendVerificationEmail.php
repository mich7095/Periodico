<?php

namespace App\Jobs;

use Mail;
use App\Mail\EmailVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
     //What the handle function does is to create an instance of email verification template that is passed to Mail for sending off the email to a user.
    public function handle()
    {
      $email = new EmailVerification($this->user);
      Mail::to($this->user->email)->send($email);
    }
}
