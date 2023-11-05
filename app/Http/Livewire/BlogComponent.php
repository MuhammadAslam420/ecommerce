<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Seo;

class BlogComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categories=Category::count();
        $blogs=Blog::orderBy('id','desc')->paginate(12);
        $views=Blog::sum('views');
        $seo = Seo::where('page_name', 'blog')->firstOrFail();
        try{
            return view('livewire.blog-component',['blogs'=>$blogs,'categories'=>$categories,'views'=>$views])->layout("layouts.base", ['seo' => $seo]);
        }
        catch(\Exception $e){
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
    }
}
