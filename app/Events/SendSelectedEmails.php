<?php

namespace App\Events;

use App\Mail\PromotionMail;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendSelectedEmails
{
    use Dispatchable, SerializesModels;

    public $emails;
    public $mailContent;
    public $subject;

    /**
     * Create a new event instance.
     *
     * @param array $emails
     * @param string $mailContent
     * @param string $subject
     */
    public function __construct(array $emails,string $mailContent,string $subject)
    {
        $this->emails = $emails;
        $this->mailContent = $mailContent;
        $this->subject = $subject;

    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
       // $emailContent = 'This is the content of the email.';  Replace with your desired email content

        foreach ($this->emails as $email) {
            Mail::to($email)->send(new PromotionMail($this->mailContent,$this->subject));

        }
    }
}
