<?php

namespace App\Http\Livewire\Admin\Mail;

use App\Models\EmailSubscribe;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditSubscribeMailComponent extends Component
{
    use LivewireAlert;
    public $mail;
    public $from;
    public $subject;
    public $status;
    public $link;
    public $mail_id;
    protected $rules = [
        'from' => 'required',
        'subject' => 'required',
        'status' => 'required',
        'link' => 'required',
        'mail' => 'required',
    ];
    public function mount($id)
    {
        $this->mail_id = $id;
        $emailSubscribe = EmailSubscribe::findOrFail($this->mail_id);
        $this->from = $emailSubscribe->from;
        $this->subject = $emailSubscribe->subject;
        $this->status = $emailSubscribe->status;
        $this->link = $emailSubscribe->link;
        $this->mail = $emailSubscribe->message;
    }

    public function editMail()
    {
        $this->validate();
        try {
            $mail = EmailSubscribe::findorFail($this->mail_id);
            $mail->from = $this->from;
            $mail->subject = $this->subject;
            $mail->status = $this->status;
            $mail->link = $this->link;
            $mail->message = $this->mail;
            $mail->save();
            $this->alert('success', 'Subscribe Message Has been added successfully');
            $this->reset();
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
            $this->reset();
        }

    }
    public function render()
    {
        return view('livewire.admin.mail.edit-subscribe-mail-component')->layout('layouts.admin');
    }
}
