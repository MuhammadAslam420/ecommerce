<?php

namespace App\Http\Livewire\Header;

use Livewire\Component;
use App\Models\Announcement;

class Headercomponent extends Component
{
    protected $listeners=['refreshComponent'=>'$refresh'];
    public function render()
    {
        $announcements=Announcement::where('status','1')->get();

        return view('livewire.header.headercomponent',['announcements'=>$announcements]);
    }
}
