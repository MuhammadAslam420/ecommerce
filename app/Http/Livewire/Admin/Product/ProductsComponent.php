<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Brand;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductsComponent extends Component
{
    public $perPage=8;
    public $category;
    public $brand;
    // public $refurnished;
    public $sortBy;
    public $sorting='asc';
    public $search;
    use WithPagination;
    public $product_id;
    use LivewireAlert;
    public function changeStatus($id,$status)
    {
        $product = Product::find($id);
        $product->status=$status;
        $product->save();
        $this->alert('success', 'Product status has been change successfully!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);

    }
    public function changeFeatured($id,$featured)
    {
        $product = Product::find($id);
        $product->featured=$featured;
        $product->save();
        $this->alert('success', 'Product Featured has been change successfully!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);

    }
    public function deleteProduct($id)
    {
     try{
        $product=Product::find($id);
        $product->delete();
        $this->alert('success', 'Product has been deleted successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
        ]);
     }catch(\Exception $e)
     {
            $this->alert('error', $e->getMessage(), [
                'position' => 'center',
                'timer' => 10000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
     }
    }

    public function render()
    {
        if($this->sortBy === 'featured')
        {
            $products = Product::where('featured', '1')->where('name','LIKE','%'.$this->search.'%')->where('SKU', 'LIKE', '%' .$this->search. '%')->orderBy('id', $this->sorting)->paginate($this->perPage);
        }elseif($this->sortBy ==='new')
        {
            $products = Product::where('product_type', 'New')->where('name', 'LIKE', '%' .$this->search.'%')->where('SKU', 'LIKE', '%' .$this->search. '%')->orderBy('id', $this->sorting)->paginate($this->perPage);
        }elseif($this->sortBy ==='used')
        {
            $products = Product::where('product_type', 'Used')->where('name', 'LIKE', '%' .$this->search.'%')->where('SKU', 'LIKE', '%' .$this->search. '%')->orderBy('id', $this->sorting)->paginate($this->perPage);

        }elseif($this->sortBy ==='refurnished')
        {
            $products = Product::where('name', 'LIKE', '%' .$this->search. '%')->where('SKU', 'LIKE', '%' .$this->search. '%')->where('product_type', 'Refurnished')->orderBy('id', $this->sorting)->paginate($this->perPage);
        }elseif($this->sortBy ==='default'){
            $products = Product::where('name', 'LIKE', '%' .$this->search. '%')->orWhere('SKU', 'LIKE', '%' .$this->search. '%')->orderBy('id', 'desc')->paginate($this->perPage);
        }elseif($this->category)
        {
            $products = Product::where('category_id', 'LIKE', '%' . $this->category . '%')->orderBy('id', $this->sorting)->paginate($this->perPage);

        }elseif($this->brand)
        {
            $products = Product::where('brand_id', 'LIKE', '%' . $this->brand . '%')->orderBy('id',$this->sorting)->paginate($this->perPage);

        }
        else{
            $products = Product::where('name', 'LIKE', '%' .$this->search. '%')->orWhere('SKU', 'LIKE', '%' .$this->search. '%')->orderBy('name', $this->sorting)->paginate($this->perPage);

        }

        $categories=Category::all();
        $brands=Brand::all();
        return view('livewire.admin.product.products-component',['products'=>$products,'brands'=>$brands,'categories'=>$categories])->layout('layouts.admin');
    }
}
