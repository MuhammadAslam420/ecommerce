<?php

namespace App\Http\Livewire\Header;

use Livewire\Component;
use App\Models\HomePageSetting;
use App\Models\Category;
use App\Models\HomeCategory;

class MobileHeaderComponent extends Component
{
    public $search;
    public $category_id;
    public function mount()
    {
         $this->category_id="All Categories";
        $this->fill(request()->only('search', 'category_id'));
    }
    public function render()
    {
        $categories=Category::inRandomOrder()->limit(10)->get();
        $setting=HomePageSetting::first();
        $home_cat = HomeCategory::find(2);
        if($home_cat)
        {
            $cats = explode(',', $home_cat->categories);
            $no_of_products=$home_cat->products;
            $megaMenu = Category::with(['products' => function ($query) use ($no_of_products) {
                $query->take($no_of_products);
            }])->whereIn('id', $cats)->get();
        }
        return view('livewire.header.mobile-header-component',['setting'=>$setting,'categories'=>$categories,'megaMenu'=>$megaMenu]);
    }
}
