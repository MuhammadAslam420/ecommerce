<?php

namespace App\Http\Livewire;

use App\Models\Seo;
use Livewire\Component;

class ThankyouComponent extends Component
{
    public function render()
    {
        $seo = Seo::where('page_name', 'thank_you')->firstOrFail();
        try {
            return view('livewire.thankyou-component')->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
