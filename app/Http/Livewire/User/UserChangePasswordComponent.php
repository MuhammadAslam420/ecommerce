<?php

namespace App\Http\Livewire\User;

use App\Models\Seo;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password',
        ];


    public function changePassword()
    {
        $this->validate();

        if (Hash::check($this->current_password, Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('success', 'Password Has Been Changed Successfully!');
        } else {
            session()->flash('fail', 'Password does not match!!');
        }
    }
    public function render()
    {
        $seo = Seo::where('page_name', 'user_change_password')->firstOrFail();
        try {
            return view('livewire.user.user-change-password-component')->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
