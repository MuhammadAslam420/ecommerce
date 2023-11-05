<?php

namespace App\Listeners;

use App\Events\SendSelectedEmails;
use App\Mail\PromotionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendSelectedEmailsListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  SendSelectedEmails  $event
     * @return void
     */
    public function handle(SendSelectedEmails $event)
    {
        foreach ($event->emails as $email) {
            $mail = new PromotionMail($event->mailContent, $event->subject);
            Mail::to($email)->send($mail);
        }
    }

}
