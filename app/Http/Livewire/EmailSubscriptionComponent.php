<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\SubscriptionEmail;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\MailDb;
class EmailSubscriptionComponent extends Component
{
    use LivewireAlert;
    public $email;


    public function sendMail()
    {
        try{
            Mail::to($this->email)->send(new SubscriptionEmail());
            $mail=new MailDb();
            $mail->email=$this->email;
            $mail->save();
            $this->alert('success','Thanks For Subscribe us.');
            $this->reset();
        }catch( \Exception $e)
        {
            $this->alert('error',$e->getMessage(), [
                'position' => 'center',
                'timer' => 5000,
                'toast' => true,
               ]);
            $this->reset();
        }
    }
    public function render()
    {
        return <<<'blade'
                  <section class="newsletter p-30 text-white wow fadeIn animated">
                     <div class="container">
                       <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                     <div class="row align-items-center">
                         <div class="col flex-horizontal-center">
                             <img class="icon-email" src="{{asset('assets/images/icon-email.svg')}}" alt="">
                             <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                         </div>
                         <div class="col my-4 my-md-0 des">
                             <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>Up comming pormotions.</strong></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <!-- Subscribe Form -->
                     <form class="form-subcriber d-flex wow fadeIn animated" wire:submit.prevent="sendMail">
                         <input type="email" class="form-control bg-white font-small" placeholder="Enter your email" wire:model="email">
                         <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                     </form>
                     <!-- End Subscribe Form -->
                 </div>
                        </div>
                    </div>
                </section>

        blade;
    }
}
