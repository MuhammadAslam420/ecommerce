<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use App\Models\Seo;

class PurchaseGuideComponent extends Component
{
    public function render()
    {
        $page=Page::find(2);
        $seo = Seo::where('page_name', 'purchase_guide')->firstOrFail();
        try {
            return view('livewire.purchase-guide-component',['page'=>$page])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
