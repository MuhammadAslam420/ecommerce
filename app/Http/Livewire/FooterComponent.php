<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomePageSetting;

class FooterComponent extends Component
{


    public function render()
    {
        $setting=HomePageSetting::first();
        try {
            return view('livewire.footer-component',['setting'=>$setting]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
