<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Page;
use App\Models\HomePageSetting;
use App\Models\Seo;

class ContactComponent extends Component
{
    use LivewireAlert;
    public $name;
    public $message;
    public $email;
    public $mobile;
    protected $rules=[
        'name'=>'required',
        'email'=>'required',
        'message'=>'required'
    ];
    public function sendMessage()
    {
        $this->validate();
        try{
            $msg=new Message();
            $msg->name=$this->name;
            $msg->email=$this->email;
            $msg->mobile=$this->mobile;
            $msg->message=$this->message;
            $msg->save();
            $this->alert('success','Message has been sent successfully',[
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,]
            );

        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage(),[
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,]);
        }
    }
    public function render()
    {
        $page=Page::find(1);
        $setting=HomePageSetting::first();
        $seo = Seo::where('page_name', 'contact_us')->firstOrFail();
        try {
            return view('livewire.contact-component',['page'=>$page,'setting'=>$setting])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }

    }
}
