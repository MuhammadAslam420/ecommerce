<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Seo;
use Livewire\WithPagination;
use Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class BrandcComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $listeners = ['refreshcomponent' => '$refresh'];
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $brand_id;
    public $color='d';
    public $size='d';
    public function mount($id)
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->min_price = 10;
        $this->max_price = 10000;
        $this->brand_id = $id;
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
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
       $this->alert('success','Product has been added to your cart');
    }
    public function wishlist($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to your wishlist');
    }
    public function compare($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to your compare');
    }
    public function render()
    {

        $brand = Brand::where('id', $this->brand_id)->first();
        if ($this->sorting == '1') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->where('featured', '1')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'date') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->orderBy('price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->orderBy('price', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'az') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->orderBy('name', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'za') {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->orderBy('name', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('brand_id', $brand->id)->whereBetween('price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        $seo = Seo::where('page_name', 'brand')->firstOrFail();
        try {
            return view('livewire.brandc-component',['products'=>$products])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
