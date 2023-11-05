<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Page;
use App\Models\Seo;

class PrivacyPolicyComponent extends Component
{
    use LivewireAlert;
    public function render()
    {

        try {
            $page=Page::where('title','privacy_policy')->firstOrFail();
            $seo = Seo::where('page_name','privacy_policy')->firstOrFail();
            return view('livewire.privacy-policy-component',['page'=>$page])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            //  $this->alert('error',$e->getMessage());
            $errorMessage = $e->getMessage();
            //dd($errorMessage);
            return view('livewire.admin.error-component')->layout("layouts.base");
        }

    }
}
