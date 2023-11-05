<?php

namespace App\Http\Livewire\Admin\Messages;

use Livewire\Component;
use App\Models\Message;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AllMessagesComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    public function deleteMessage($id)
    {
        $msg=Message::find($id);
        $msg->delete();
        $this->alert('success','Message Has been deleted successfully');
    }
    public function render()
    {
        $msgs=Message::orderBy('created_at','desc')->paginate(12);
        return view('livewire.admin.messages.all-messages-component',['msgs'=>$msgs])->layout('layouts.admin');
    }
}
