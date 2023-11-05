<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\Brand;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddProductComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $slug;
    public $category_id;
    public $brand_id;
    public $short_description;
    public $description;
    public $price;
    public $sale_price;
    public $featured;
    public $SKU;
    public $status;
    public $stock;
    public $front_image;
    public $back_image;
    public $gallery;
    public $qty;
    public $product_type;
   protected $rules=[
            'name'=>'required',
            'slug'=>'required|unique:products',
            'category_id'=>'required',
            'brand_id'=>'required',
            'short_description'=>'required',
            'price'=>'required',
            'featured'=>'required|integer',
            'SKU'=>'required|string',
            'status'=>'required|string',
            'stock'=>'required|string',
            'front_image'=> 'required|mimes:jpg,jpeg,png,svg',
            'qty'=>'required|integer',
            'product_type'=>'required|string'

   ];
    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
   public function addProduct()
   {
    $this->validate();
    //dd($this->description);
    try{
            $product=new Product();
            $product->name=$this->name;
            $product->category_id = $this->category_id;
            $product->brand_id = $this->brand_id;
            $product->slug = $this->slug;
            $product->price = $this->price;
            $product->sale_price = $this->sale_price;
            $product->featured = $this->featured;
            $product->status = $this->status;
            $product->stock = $this->stock;
            $product->SKU = $this->SKU;
            $product->quantity = $this->qty;
            $product->product_type=$this->product_type;
            $product->short_description = $this->short_description;
            $product->description = $this->description;
            if($this->front_image)
            {
                $imageName = Carbon::now()->timestamp . 'f.' . $this->front_image->extension();
                $this->front_image->storeAs('assets/images/product', $imageName);
                $product->front_image = $imageName;
            }
            if($this->back_image)
            {
                $imageName = Carbon::now()->timestamp . 'b.' . $this->back_image->extension();
                $this->back_image->storeAs('assets/images/product', $imageName);
                $product->back_image = $imageName;
            }
            if($this->gallery)
            {
                $imagesname = '';
                foreach ($this->gallery as $key => $image) {
                    $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                    $image->storeAs('assets/images/product/gallery', $imgName);
                    $imagesname = $imagesname . ',' . $imgName;
                }
                $product->images = $imagesname;
            }
            $product->save();
            $this->alert('success', 'New Product has been added successfully!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            $this->name='';
            $this->category_id='';
            $this->brand_id='';
            $this->slug='';
            $this->price='';
            $this->sale_price='';
            $this->featured='';
            $this->status='';
            $this->stock='';
            $this->SKU='';
            $this->qty='';
            $this->product_type='';
            $this->short_description='';
            $this->description='';

    }catch (\Exception $e)
    {
            $this->alert('error', $e->getMessage());
    }
   }
    public function render()
    {
        $categories=Category::all();
        $brands=Brand::all();
        return view('livewire.admin.product.add-product-component',
        ['categories'=>$categories,'brands'=>$brands])->layout('layouts.admin');
    }
}
