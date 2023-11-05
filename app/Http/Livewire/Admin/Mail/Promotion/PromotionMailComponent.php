<?php

namespace App\Http\Livewire\Admin\Mail\Promotion;

use App\Events\SendSelectedEmails;
use App\Models\MailDb;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Event;

class PromotionMailComponent extends Component
{
    use LivewireAlert;
    public $emails = [];
    public $mailContent;
    public $subject;
    protected $rules =[
        'emails'=>'required',
        'mailContent'=>'required',
        'subject'=>'required',
    ];
    public function sendEmails()
    {

        try{
            Event::dispatch(new SendSelectedEmails($this->emails, $this->mailContent, $this->subject));
            $this->alert('success','Mails has been sended to all users emails');
            $this->reset();
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage());
        }
    }

    public function render()
    {
        $mails = MailDb::all();
        return view('livewire.admin.mail.promotion.promotion-mail-component', ['mails' => $mails])->layout('layouts.admin');
    }
}
