<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    public function render()
    {
        
        $users=User::where('utype','USR')->orderBy('id','desc')->paginate(12);
        // echo '<pre>';
        // var_dump($users);
        // echo '</pre>';
        // exit;
        return view('livewire.admin.user.user-component',['users'=>$users])->layout('layouts.admin');
    }
}
