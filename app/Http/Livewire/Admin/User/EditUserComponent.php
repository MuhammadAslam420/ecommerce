<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EditUserComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $user;
    public $name;
    public $email;
    public $mobile;
    public $address;
    public $nprofile;
    public $nprofileimage;
    public $current_password;
    public $password;
    public $password_confirmation;
    public $utype;

    protected $rules = [
        'current_password' => 'required',
        'password' => 'required|min:8|confirmed|different:current_password',
    ];

    public function mount($id)
    {
        $this->user = User::findorFail($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        // $this->photo=$this->user->profile_photo_path;
        $this->mobile=$this->user->mobile;
        $this->address=$this->user->shipping_address;
        $this->utype=$this->user->utype;
        $this->nprofileimage = asset('assets/images/customer/'.$this->user->profile_photo_path);
        // dd($this->nprofile);
    }

    public function changePassword()
    {
        $this->validate();

        if (Hash::check($this->current_password, $this->user->password)) {
            $this->user->password = Hash::make($this->password);
            $this->user->save();
            $this->alert('success', 'Password Has Been Changed Successfully!');
            $this->reset();
        } else {
            $this->alert('error', 'Password does not match!!');
        }
    }

    public function updateProfile()
    {
        try{
            $this->user->name=$this->name;
            $this->user->email=$this->email;
            $this->user->mobile=$this->mobile;
            $this->user->shipping_address=$this->address;
            if($this->nprofile){
                $previousImagePath = 'assets/images/customer/'.$this->user->profile_photo_path;
                if ($previousImagePath && Storage::disk('public')->exists($previousImagePath)) {
                    Storage::disk('public')->delete($previousImagePath);
                }
                $image=Carbon::now()->timestamp.'.'.$this->nprofile->extension();
                $this->nprofile->storeAs('assets/images/customer',$image);
                $this->user->profile_photo_path=$image;
            }
            if($this->user->save()){
                // $this->dispatchBrowserEvent('clear-file-input');
                $this->alert('success','Profile updated');
            }else{
                $this->alert('success','Internal server error!');
            }
            
        }catch(\Exception $e)
        {
          $this->alert('error',$e->getMessage());
        }
    }

    public function render()
    {
        try{
            return view('livewire.admin.user.edit-user-component')->layout('layouts.admin');
        }
        catch(\Exception $e){
            $this->alert('error',$e->getMessage());
        }
    }
}
