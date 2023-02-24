<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $email, $name, $subject, $message;
    public $tries = 10;
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->subject = $request->subject;
        $this->message = $request->message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mail = new ContactMail($this->subject, $this->message);
        Mail::to($this->email)->send($mail);
    }
}
