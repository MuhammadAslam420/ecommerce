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

class EditProductComponent extends Component
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
    public $product_id;
    public $new_gallery;
    public $new_front_image;
    public $new_back_image;
    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'category_id' => 'required',
        'brand_id' => 'required',
        'short_description' => 'required',
        'price' => 'required',
        'featured' => 'required|integer',
        'SKU' => 'required|string',
        'status' => 'required|string',
        'stock' => 'required|string',
        'qty' => 'required|integer',
        'product_type' => 'required|string'

    ];
    public function mount($id)
    {
        $this->product_id=$id;
        $product=Product::find($this->product_id);
        $this->name=$product->name;
        $this->category_id=$product->category_id;
        $this->brand_id=$product->brand_id;
        $this->slug=$product->slug;
        $this->price=$product->price;
        $this->sale_price=$product->sale_price;
        $this->featured=$product->featured;
        $this->status=$product->status;
        $this->stock=$product->stock;
        $this->SKU=$product->SKU;
        $this->qty=$product->quantity;
        $this->product_type=$product->product_type;
        $this->short_description=$product->short_description;
        $this->description=$product->description;
        $this->front_image=$product->front_image;
        $this->back_image = $product->back_image;
        $this->gallery = $product->images;

    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function editProduct()
    {
        $this->validate();
        //dd('success');
        try {
            $product =Product::find($this->product_id);
            $product->name = $this->name;
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
            $product->product_type = $this->product_type;
            $product->short_description = $this->short_description;
            $product->description = $this->description;
            if ($this->new_front_image) {
                $imageName = Carbon::now()->timestamp . 'f.' . $this->new_front_image->extension();
                $this->new_front_image->storeAs('assets/images/product', $imageName);
                $product->front_image = $imageName;
            }
            if ($this->new_back_image) {
                $imageName = Carbon::now()->timestamp . 'b.' . $this->new_back_image->extension();
                $this->new_back_image->storeAs('assets/images/product', $imageName);
                $product->back_image = $imageName;
            }
            if ($this->new_gallery) {
                $imagesname = '';
                foreach ($this->new_gallery as $key => $image) {
                    $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                    $image->storeAs('assets/images/product/gallery', $imgName);
                    $imagesname = $imagesname . ',' . $imgName;
                }
                $product->images = $imagesname;
            }
            $product->save();
            $this->alert('success', 'Product has been Updated successfully!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);

        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }
    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('livewire.admin.product.edit-product-component',['categories'=>$categories,'brands'=>$brands])->layout('layouts.admin');
    }
}
