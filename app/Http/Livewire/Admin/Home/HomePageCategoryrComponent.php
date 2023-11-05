<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\HomeCategory;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomePageCategoryrComponent extends Component
{
    use LivewireAlert;
    public $sel_category;
    public $numberofproducts;

    public function mount()
    {
        $category = HomeCategory::find(1);
        $this->sel_category = $category->categories;
        $this->numberofproducts = $category->products;

    }
    public function updateHomeCategory()
    {
       try{
        $category = HomeCategory::find(1);
        $category->categories = $this->sel_category;
        $category->products = $this->numberofproducts;
        $category->save();
        $this->alert('success','Categories and Products has been Updated or Added');
       }catch(\Exception $e)
       {
        $this->alert('error',$e->getMessage(), [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);
       }
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.home.home-page-categoryr-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
