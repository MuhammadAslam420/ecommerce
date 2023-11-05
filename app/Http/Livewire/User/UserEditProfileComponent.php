<?php

namespace App\Http\Livewire\User;

use App\Models\Seo;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserEditProfileComponent extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $billing_address;
    public $shipping_address;

    public function mount()
    {
        $user=User::find(Auth::user()->id);
        $this->name=$user->name;
        $this->email = $user->email;
        $this->mobile = $user->mobile;
        $this->billing_address = $user->billing_address;
        $this->shipping_address = $user->shipping_address;
    }
    public function editUser()
    {
        $user = User::find(Auth::user()->id);
        $user->name=$this->name;
        $user->email=$this->email;
        $user->mobile=$this->mobile;
        $user->billing_address=$this->billing_address;
        $user->shipping_address=$this->shipping_address;
        $user->save();
        session()->flash('message','Profile has been update successfully!');

    }
    public function render()
    {

        $seo = Seo::where('page_name', 'user_edit_profile')->firstOrFail();
        try {
            return view('livewire.user.user-edit-profile-component')->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
