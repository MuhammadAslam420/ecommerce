<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use App\Models\Seo;

class TermsConditionComponent extends Component
{
    public function render()
    {
        $page=Page::where('title','terms_condition')->firstOrFail();
        $seo = Seo::where('page_name', 'terms_condition')->firstOrFail();
        try {
            return view('livewire.terms-condition-component',['page'=>$page])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }

    }
}
