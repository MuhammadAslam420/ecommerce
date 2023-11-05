<?php

namespace App\Http\Livewire\Admin\Profile;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class AdminProfileComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $email;
    public $photo;
    public $mobile;
    public $address;
    public $nprofile;
    public $current_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password',
        ];

        public function mount()
        {
            $user=User::find(Auth::user()->id);
            $this->name=$user->name;
            $this->email=$user->email;
            $this->photo=$user->profile_photo_path;
            $this->mobile=$user->mobile;
            $this->address=$user->shipping_address;
        }
    public function changePassword()
    {
        $this->validate();

        if (Hash::check($this->current_password, Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            $this->alert('success', 'Password Has Been Changed Successfully!');
            $this->reset();
        } else {
            $this->alert('error', 'Password does not match!!');
        }
    }

    public function updateProfile()
    {
        try{
            $user=User::find(Auth::user()->id);
            $user->name=$this->name;
            $user->email=$this->email;
            $user->mobile=$this->mobile;
            $user->shipping_address=$this->address;
            if($this->nprofile)
            {
              $image=Carbon::now()->timestamp.'.'.$this->nprofile->extension();
              $this->nprofile->storeAs('admin/assets/images',$image);
            }
            $user->profile_photo_path=$image;
            $user->save();
            $this->alert('success','Profile updated');
        }catch(\Exception $e)
        {
          $this->alert('error',$e->getMessage());
        }
    }
    public function render()
    {

        return view('livewire.admin.profile.admin-profile-component')->layout('layouts.admin');
    }
}
