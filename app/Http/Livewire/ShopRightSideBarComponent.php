<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShopRightSideBarComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $listeners = ['refreshcomponent' => '$refresh'];
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $size = 'd';
    public $color = 'd';
    public $new;
    public $used;
    public $refurnished;
    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->min_price = 100;
        $this->max_price = 10000;
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
        $this->alert('success', 'Product has been added to your cart');
    }
    public function wishlist($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('success', 'Product has been added to your wishlist');
    }
    public function compare($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('success', 'Product has been added to your compare');
    }
    public function render()
    {
        if ($this->sorting == '1') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('featured', '1')->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'date') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('price', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'az') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('name', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'za') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', $this->new)->where('product_type', $this->used)->where('product_type', $this->refurnished)->orderBy('name', 'DESC')->paginate($this->pagesize);
        } elseif ($this->new || $this->used || $this->refurnished) {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('product_type', 'like', '%' . $this->new . '%')->where('product_type', 'like', '%' . $this->used . '%')->where('product_type', 'like', '%' . $this->refurnished . '%')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        try {
            return view('livewire.shop-right-side-bar-component',['products'=>$products])->layout("layouts.base");
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
