<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Seo;
use Cart;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SaleComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $listeners = ['refreshcomponent' => '$refresh'];
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $color='d';
    public $size='d';
    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->min_price = 10;
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
        $this->alert('successs', 'Product has been added to your cart');
    }
    public function wishlist($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('successs', 'Product has been added to your wishlist');
    }
    public function compare($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price,$options)->associate('App\Models\Product');
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('successs', 'Product has been added to your compare');
    }
    public function render()
    {
        if ($this->sorting == '1') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('featured', '1')->where('sale_price','>','0')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'date') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->orderBy('sale_price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->orderBy('sale_price', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'az') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->orderBy('name', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'za') {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->orderBy('name', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('sale_price', [$this->min_price, $this->max_price])->where('sale_price', '>', '0')->paginate($this->pagesize);
        }

        $seo = Seo::where('page_name', 'sale')->firstOrFail();
        try {
            return view('livewire.sale-component',['products'=>$products])->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
