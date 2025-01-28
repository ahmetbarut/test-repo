<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PushBriefMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $report) {}

    public function build()
    {
        return $this->subject('Push Brief Report')
            ->view('emails.push-brief', ['report' => $this->report]);
    }
}
