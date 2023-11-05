<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\SaleOn;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\HomeCategory;
use App\Models\Seo;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomeComponent extends Component
{
    use LivewireAlert;
    protected $listeners=['refreshcomponent'=>'$refresh'];
    public $size='d';
    public $color='d';
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
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price, $options)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->alert('success', 'Product has been added to your cart');
    }
    public function wishlist($product_id, $product_name, $product_price,)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price, $options)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('success', 'Product has been added to your wishlist');
    }
    public function compare($product_id, $product_name, $product_price)
    {
        $options = [
            'size' => $this->size,
            'color' => $this->color
        ];
        Cart::instance('compare')->add($product_id, $product_name, 1, $product_price, $options)->associate('App\Models\Product');
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('success', 'Product has been added to your compare');
    }
    public function render()
    {
        $categories=Category::inRandomOrder()->limit(10)->get();
        $products=Product::inRandomOrder()->limit(10)->get();
        $featuredProducts=Product::where("featured",'1')->inRandomOrder()->limit(8)->get();
        $popularProducts = Product::where("featured", '0')->inRandomOrder()->limit(8)->get();

        $new_products=Product::orderBy('id','desc')->inRandomOrder()->limit(8)->get();

        $banners=Banner::where("position", "0")->limit(3)->get();

        $banner2=Banner::where("position",'1')->limit(2)->get();
        $slid=Banner::where('status','active')->where("position",'2')->limit(1)->get();
        $slid3=Banner::where('status','active')->where("position",'3')->limit(3)->get();
        $slids=Banner::where('status','active')->where("position",'4')->limit(1)->get();
        $sliderss = Banner::where('status','active')->where("position", '5')->limit(1)->get();
        $slides = Banner::where('status','active')->where("position", '6')->limit(2)->get();
        $brands=Brand::orderBy("created_at",'desc')->take(6)->get();
        $blogs=Blog::orderBy("created_at","desc")->take(2)->get();
        $blog_sliders=Banner::where('status','active')->where("position",'7')->take(1)->get();
        $sale=SaleOn::where('status','1')->first();
        $blog_slids=Banner::where('status','active')->where("position",'8')->limit(1)->get();
        $sproducts=Product::where('sale_price','>',0)->take(2)->get();
        $home_cat = HomeCategory::find(1);
        if($home_cat)
        {
            $cats = explode(',', $home_cat->categories);
            $no_of_products = $home_cat->products;
            $hcategories = Category::with('products')->whereIn('id', $cats)->get();
        }

        $hotProducts=Product::where('featured','1')->orderBy('created_at','desc')->limit(3)->get();
        $tproducts = OrderItem::with('product')
        ->select('product_id', DB::raw('SUM(qty) as total_qty'))
        ->groupBy('product_id')
        ->orderBy('total_qty', 'desc')
        ->take(3)
        ->get();
        $Rproducts=OrderItem::with('product')->orderBy('created_at','desc')->take(3)->get();
        $home_brands=Brand::where('status','active')->where('position','!=',0)->get();
        $seo = Seo::where('page_name', 'home')->firstOrFail();
        try {
            return view('livewire.home-component',['categories'=> $categories,'products'=>$products,
            'featuredProducts'=>$featuredProducts, 'popularProducts'=> $popularProducts,
            'new_products'=> $new_products,"banners"=>$banners, 'banner2'=> $banner2,
            'slid'=> $slid, 'slids'=> $slids, 'sliderss'=> $sliderss, 'slides'=> $slides,'slid3'=>$slid3,
            'brands'=> $brands,'blogs'=>$blogs, 'blog_sliders'=> $blog_sliders,
            'blog_slids'=> $blog_slids,'sale'=>$sale, 'sproducts'=> $sproducts,'hcategories'=>$hcategories,
            'hotProducts'=>$hotProducts,'tproducts'=>$tproducts,'Rproducts'=>$Rproducts,'home_brands'=>$home_brands])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }

    }
}
