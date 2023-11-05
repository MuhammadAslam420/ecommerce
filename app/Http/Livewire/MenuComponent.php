<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeCategory;
use App\Models\Category;
class MenuComponent extends Component
{
    public function render()
    {
        $home_cat = HomeCategory::find(2);
        if($home_cat)
        {
            $cats = explode(',', $home_cat->categories);
            $no_of_products=$home_cat->products;
            $hcategories = Category::with(['products' => function ($query) use ($no_of_products) {
                $query->take($no_of_products);
            }])->whereIn('id', $cats)->get();
        }
        try {
            return view('livewire.menu-component',['hcategories'=>$hcategories]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
