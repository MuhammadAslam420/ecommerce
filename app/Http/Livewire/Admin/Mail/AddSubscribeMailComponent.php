<?php

namespace App\Http\Livewire\Admin\Mail;

use Livewire\Component;
use App\Models\EmailSubscribe;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class AddSubscribeMailComponent extends Component
{
    use LivewireAlert;
    public $mail;
    public $from;
    public $subject;
    public $status;
    public $link;
    protected $rules = [
        'from'=>'required',
        'subject'=>'required',
        'status'=>'required',
        'link'=>'required',
        'mail'=>'required'
    ];

    public function addMail()
    {
        $this->validate();
        try{
            $mail = new EmailSubscribe();
            $mail->from=$this->from;
            $mail->subject=$this->subject;
            $mail->status=$this->status;
            $mail->link=$this->link;
            $mail->message=$this->mail;
            $mail->save();
            $this->alert('success','Subscribe Message Has been added successfully');
            $this->reset();
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage());
            $this->reset();
        }

    }

    public function render()
    {
        return view('livewire.admin.mail.add-subscribe-mail-component')->layout('layouts.admin');
    }
}
