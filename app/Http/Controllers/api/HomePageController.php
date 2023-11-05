<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageSetting;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Banner;

class HomePageController extends Controller
{
    //
    public function homePage()
    {
      $setting=HomePageSetting::findorFail(1);
      if($setting)
      {
        return response()->json($setting, 200);
      }else{
        $setting=new HomePageSetting();
        $setting->save();
        return response()->json($setting, 200);
      }
    }
    public function homeNewArrivals()
    {
        try{
            $products=Product::with(['category','brand',])
            ->orderBy('id','desc')
            ->take(10)
            ->get();
            return response()->json($products, 200);
        }catch(\Exception $e)
        {
            return response()->json($e->getMessage(),201);
        }
    }
    public function homeFeaturedProduct()
    {
        try{
            $products=Product::with(['category','brand'])
            ->where('featured','1')
            ->inRandomOrder()
            ->take(10)
            ->get();
            return response()->json($products, 200);
        }catch(\Exception $e)
        {
            return response()->json($e->getMessage(),201);
        }
    }
    public function categories()
    {
        try{
            $categories = Category::withCount('products')
                      ->where('status', 'active')
                      ->inRandomOrder()
                      ->take(8)
                      ->get();
            return response()->json($categories,200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),201);
        }
    }
    public function brands()
    {
        try{
            $brands = Brand::withCount('products')
                      ->where('status', 'active')
                      ->inRandomOrder()
                      ->take(8)
                      ->get();
            return response()->json($brands,200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),201);
        }
    }
    public function sliders()
    {
        try{
            $banners = Banner::where('status', 'active')
                      ->where('position','0')
                      ->take(3)
                      ->get();
            return response()->json($banners,200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),201);
        }
    }
}
