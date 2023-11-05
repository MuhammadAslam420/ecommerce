<?php

namespace App\Http\Livewire\Admin\Mail;

use Livewire\Component;
use App\Models\EmailSubscribe;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SubscribeMailComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    public function updateStatus($id,$status)
    {
        try{
            $mail = EmailSubscribe::findorFail($id);
            $mail->status=$status;
            $mail->save();
            $this->alert('success','Staus has been updated Successfully!');
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage());
        }
    }
    public function deleteMail($id)
    {
        try{
            $mail=EmailSubscribe::findorFail($id);
            $mail->delete();
            $this->alert('success','Subscribe Mail Message Has been deleted');
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage());
        }
    }
    public function render()
    {
        $mails=EmailSubscribe::orderBy('created_at','desc')->paginate(12);
        return view('livewire.admin.mail.subscribe-mail-component',['mails'=>$mails])->layout('layouts.admin');
    }
}
