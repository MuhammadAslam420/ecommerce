<?php

namespace App\Http\Livewire\Admin\Mega\Menu;

use Livewire\Component;
use App\Models\HomeCategory;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class MegaMenuComponent extends Component
{
    use LivewireAlert;
    public $selected_categories = [];
    public $numberofproducts;

    public function mount()
    {
        $category = HomeCategory::find(2);
        $this->selected_categories = explode(',',$category->categories);
        $this->numberofproducts = $category->products;

    }
    public function updateMegaCategory()
    {
       try{
        $category = HomeCategory::find(2);
        $category->categories = implode(',', $this->selected_categories);
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
        $categories=Category::all();
        return view('livewire.admin.mega.menu.mega-menu-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
