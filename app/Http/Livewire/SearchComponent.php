<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Seo;
use Cart;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class SearchComponent extends Component
{
    use LivewireAlert;
    public $search;
    public $category_id;
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
        $this->fill(request()->only('search', 'category_id'));
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
        //dd($this->category_id);
        if ($this->sorting == '1') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->where('featured', '1')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'date') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->orderBy('price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->orderBy('price', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'az') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->orderBy('name', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'za') {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->orderBy('name', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('price', [$this->min_price, $this->max_price])->where('name','LIKE','%'.$this->search.'%')->where('category_id','LIKE','%'.$this->category_id.'%')->paginate($this->pagesize);
        }
        $seo = Seo::where('page_name', 'search')->firstOrFail();
        try {
            return view('livewire.search-component',['products'=>$products])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
