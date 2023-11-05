<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //     \App\Models\User::factory(10)->create();
    //     \App\Models\Category::factory(20)->create();
    //    \App\Models\Product::factory(20)->create();
    //     \App\Models\Banner::factory(15)->create();
    //     \App\Models\Brand::factory(6)->create();
    //     \App\Models\Blog::factory(10)->create();
    //    \App\Models\Attribute::factory(20)->create();
    //    \App\Models\Coupon::factory(2)->create();
    //    \App\Models\SaleOn::factory(1)->create();
    //    \App\Models\HomePageSetting::factory(1)->create();
    //    \App\Models\HomeCategory::factory(2)->create();
       \App\Models\Seo::factory(4)->create();

    }
}
