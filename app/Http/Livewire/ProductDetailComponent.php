<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\SaleOn;
use App\Models\Seo;
use Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class ProductDetailComponent extends Component
{
    use LivewireAlert;
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $p_slug;
    public $size='d';
    public $color='d';

    public function mount($slug)
    {
        $this->p_slug=$slug;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function store($product_id, $product_name, $product_price)
    {

         $options=[
            'size'=>$this->size,
            'color'=>$this->color
         ];
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
          $this->emitTo('cart-count-component', 'refreshComponent');
          $this->alert('success','Product has been added to your cart');
    }
    public function wishlist($product_id, $product_name, $product_price)
    {
        $options=[
            'size'=>$this->size,
            'color'=>$this->color
         ];
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to your wishlist');
    }
    public function compare($product_id, $product_name, $product_price)
    {
        $options=[
            'size'=>$this->size,
            'color'=>$this->color
         ];
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to your compare');
    }
    public function render()
    {
        $sale=SaleOn::where('status','1')->first();
        $product=Product::where('slug',$this->p_slug)->first();
        $related=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $baseLayoutData = [
            'meta' => [
                'og:url' => route('product-detail', ['slug' => $product->slug]),
                'og:type' => 'website',
                'og:title' => $product->title,
                'og:description' => $product->description,
                'og:image' => asset('assets/images') . '/' . $product->front_image,
            ],
        ];
        $shareButtons = \Share::page(
            'http://127.0.0.1:8000/product-detail/'.$product->slug,
            ''.$product->name,
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();
        $seo = Seo::where('page_name', 'product_detail')->firstOrFail();
        try {
            return view('livewire.product-detail-component',['product'=>$product,'related'=>$related,'sale'=>$sale,'shareButtons'=>$shareButtons])->layout("layouts.base", ['baseLayoutData' => $baseLayoutData, 'seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
