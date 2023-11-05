<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use App\Models\Team;
use App\Models\Review;
use App\Models\Brand;
use App\Models\Seo;

class AboutComponent extends Component
{

    public function render()
    {
        $page=Page::where('title','about-us')->first();
        $teams=Team::all();
        $reviews=Review::take(8)->get();
        $brands=Brand::where('status','active')->take(6)->get();
        $seo = Seo::where('page_name', 'about')->firstOrFail();
        try{
            return view('livewire.about-component',['page'=>$page,'teams'=>$teams,'reviews'=>$reviews,'brands'=>$brands])->layout("layouts.base", ['seo' => $seo]);
        }
        catch(\Exception $e){
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
    }
}
