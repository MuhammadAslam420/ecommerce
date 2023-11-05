<main class="main" wire:ignore>
    <!-- Done -->
    <section class="home-slider position-relative pt-25 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="position-relative">
                        <div class="hero-slider-1 style-3 dot-style-1 dot-style-1-position-1">
                            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-hero-slider single-animation-wrap">
                                <div class="container">
                                    <div class="slider-1-height-3 slider-animated-1">
                                        <div class="hero-slider-content-2">
                                            <h4 class="animated"><?php echo e($banner->title); ?></h4>
                                            <!-- <h2 class="animated fw-900">Supper Value Deals</h2>
                                            <h1 class="animated fw-900 text-brand">On All Products</h1> -->
                                            <p class="animated"><?php echo e($banner->subtitle); ?></p>
                                            <a class="animated btn btn-success btn-brush-3" href="<?php echo e($banner->link); ?>"> Shop Now </a>
                                        </div>
                                        <div class="slider-img">
                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($banner->image); ?>" alt="<?php echo e($banner->title); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="slider-arrow hero-slider-1-arrow style-3"></div>
                    </div>
                </div>
                <div class="col-lg-3 d-md-none d-lg-block">
                    <?php $__empty_1 = true; $__currentLoopData = $banner2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="banner-img banner-1 wow fadeIn  animated home-3">
                        <img class="border-radius-10" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="">
                        <div class="banner-text">
                            <span><?php echo e($slider->title); ?></span>
                            <h4><?php echo e($slider->subtitle); ?></h4>
                            <a href="<?php echo e($slider->link); ?>" class="btn btn-success">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="banner-img banner-1 wow fadeIn  animated home-3">
                        <img class="border-radius-10" src="assets/images/banner-5.jpg" alt="">
                        <div class="banner-text">
                            <span>Accessories</span>
                            <h4>Save 17% on <br>Autumn Hat</h4>
                            <a href="/shop">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="banner-img banner-2 wow fadeIn  animated mb-0">
                        <img class="border-radius-10" src="assets/images/banner-7.jpg" alt="">
                        <div class="banner-text">
                            <span>Smart Offer</span>
                            <h4>Save 20% on <br>Eardrop</h4>
                            <a href="/shop">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-1.png" alt="">
                        <h4 class="bg-1">Free Shipping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-2.png" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-3.png" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-4.png" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-5.png" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up animated">
                        <img src="assets/images/feature-6.png" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Done -->
    <section class="product-tabs section-padding wow fadeIn animated">
        <div class="container">
            <div class="tab-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $__currentLoopData = $hcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation" >
                        <button class="nav-link <?php echo e($key == 0 ? 'active' : ''); ?>" id="nav-tab-<?php echo e($key); ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo e($key); ?>" type="button" role="tab" aria-controls="tab-<?php echo e($key); ?>" aria-selected="<?php echo e($key == 0 ? 'true' : 'false'); ?>">
                            <?php echo e($category->name); ?>

                        </button>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <a href="/shop" class="view-more d-none d-md-flex">View More<i class="fa fa-angle-double-small-right"></i></a>
            </div>
            <!-- End nav-tabs -->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                <?php $__currentLoopData = $hcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-pane fade <?php echo e($key == 0 ? 'show active' : ''); ?>" id="tab-<?php echo e($key); ?>" role="tabpanel" aria-labelledby="tab-<?php echo e($key); ?>">
                    <div class="row product-grid-4">
                        <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>">
                                            <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
                                            <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="<?php echo e($product->slug); ?>">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModalf-<?php echo e($product->id); ?>"><i class="fa fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="/shop"><?php echo e($product->category->name); ?></a>
                                    </div>
                                    <h2><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></h2>

                                    <?php
                                    $review=0;

                                    $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                                    if ($orders != 0) {
                                                $review = ($product->reviews->count() / $orders) * 100;
                                            }
                                    ?>
                                    <div class="rating-result" title="<?php echo e($review); ?>%">

                                        <span>
                                            <span><?php echo e($review); ?>%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$<?php echo e($product->price); ?> </span>
                                        
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade custom-modal" id="quickViewModalf-<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close bg-dark text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-gallery">
                                                    <span class="zoom-icon"><i class="fa fa-search"></i></span>
                                                    <!-- MAIN SLIDES -->
                                                    <div class="product-image-slider">
                                                        <figure class="border-radius-10">
                                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="product image">
                                                        </figure>
                                                        <figure class="border-radius-10">
                                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="product image">
                                                        </figure>

                                                    </div>
                                                    <!-- THUMBNAILS -->
                                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                                        <div><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="product image"></div>
                                                        <div><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="product image"></div>

                                                    </div>
                                                </div>
                                                <!-- End Gallery -->
                                                <div class="social-icons single-share">
                                                    <ul class="text-grey-5 d-inline-block">
                                                        <li><strong class="mr-10">Share this:</strong></li>
                                                        <li class="social-facebook"><a href="#"><img src="<?php echo e(asset('assets/images/icon-facebook.svg')); ?>" alt=""></a></li>
                                                        <li class="social-twitter"> <a href="#"><img src="<?php echo e(asset('assets/images/icon-twitter.svg')); ?>" alt=""></a></li>
                                                        <li class="social-instagram"><a href="#"><img src="<?php echo e(asset('assets/images/icon-instagram.svg')); ?>" alt=""></a></li>
                                                        <li class="social-linkedin"><a href="#"><img src="<?php echo e(asset('assets/images/icon-pinterest.svg')); ?>" alt=""></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-info">
                                                    <h3 class="title-detail mt-30"><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"> <?php echo e($product->name); ?></a></h3>
                                                    <div class="product-detail-rating">
                                                        <div class="pro-details-brand">
                                                            <span> Brands: <a href="#"><?php echo e($product->brand->name); ?></a></span>
                                                        </div>
                                                        <div class="product-rate-cover text-end">
                                                            <div class="product-rate d-inline-block">
                                                               <?php
                                                               $review=0;

                                                               $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                                                               if ($orders != 0) {
                                                                           $review = ($product->reviews->count() / $orders) * 100;
                                                                       }
                                                               ?>
                                                                <div class="product-rating" style="width:<?php echo e($review); ?>%">
                                                                </div>
                                                            </div>
                                                            <span class="font-small ml-5 text-muted"> (<?php echo e($product->reviews->count()); ?> reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix product-price-cover">
                                                        <div class="product-price primary-color float-left">
                                                            <ins><span class="text-brand">$<?php echo e($product->price); ?></span></ins>

                                                        </div>
                                                    </div>
                                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                    <div class="short-desc mb-30">
                                                        <p class="font-sm"><?php echo e($product->short_description); ?></p>
                                                    </div>

                                                    <div class="attr-detail attr-color mb-15"  >
                                                        <strong class="mr-10">Color</strong>


                                                           <strong class="mr-10">Color</strong>
                                                           <ul class="list-filter color-filter" >
                                                               <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <li><a href="#" wire:click="setColor('<?php echo e($attribute->color); ?>')"><span class="product-color-<?php echo e($attribute->color); ?>"></span></a></li>                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                           </ul>



                                                    </div>
                                                    <div class="attr-detail attr-size" style="display: flex;flex-direction:row;" >
                                                        <strong class="mr-10">Size</strong>
                                                        <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <ul class="list-filter size-filter font-small" >
                                                           <li><a href="#" wire:click="setSize('<?php echo e($attribute->size); ?>')"><?php echo e($attribute->size); ?></a></li>
                                                       </ul>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                                    <div class="detail-extralink">

                                                        <div class="product-extra-link2">
                                                            <button type="button" class="button button-add-to-cart" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)">Add to cart</button>
                                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta font-xs color-grey mt-50">
                                                        <li class="mb-5">SKU: <a href="#"><?php echo e($product->SKU); ?></a></li>
                                                        <li class="mb-5">Tags: <a href="<?php echo e(route('category',['slug'=>$product->category->slug])); ?>" rel="tag"><?php echo e($product->category->name); ?></a></li>
                                                        <li>Availability:<span class="in-stock text-success ml-5"><?php echo e($product->quantity); ?> Items <?php echo e($product->stockstatus); ?></span></li>
                                                    </ul>
                                                </div>
                                                <!-- Detail Info -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End tab-content -->
        </div>
    </section>
    <!-- Done -->
    <section class="banner-2 section-padding pb-0">
        <div class="container">
            <?php $__empty_1 = true; $__currentLoopData = $slid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slidr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slidr->image); ?>" alt="<?php echo e($slidr->title); ?>">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand"><?php echo e($slidr->title); ?></h4>
                    <h1 class="fw-600 mb-20"><?php echo e($slidr->subtitle); ?></h1>
                    <a href="<?php echo e($slidr->link); ?>" class="btn btn-success">Learn More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="<?php echo e(asset('assets/images/banner-4.png')); ?>" alt="">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                    <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                    <a href="/shop" class="btn">Learn More <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- Done -->
    <section class="popular-categories section-padding mt-15">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                <div class="carausel-6-columns" id="carausel-6-columns">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="/shop"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($category->logo); ?>" alt="<?php echo e($category->slug); ?>"></a>
                        </figure>
                        <h5><a href="/shop"><?php echo e($category->name); ?></a></h5>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Done -->
    <section class="banners mb-20">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $slid3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="">
                        <div class="banner-text">
                            <span><?php echo e($slider->title); ?></span>
                            <h4><?php echo e($slider->subtitle); ?></h4>
                            <a href="<?php echo e($slider->link); ?>">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Done -->
    <section class="pt-25 pb-20">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="#">
                                    <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
                                    <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="<?php echo e($product->slug); ?>">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>" class="action-btn small hover-up"><i class="fa fa-search"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">
                                    <?php if($product->featured == 1): ?>
                                    Featured
                                    <?php else: ?>
                                    Hot
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="#"><?php echo e($product->name); ?></a></h2>
                            <?php
                            $review=0;

                            $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                            if ($orders != 0) {
                                        $review = ($product->reviews->count() / $orders) * 100;
                                    }
                            ?>
                            <div class="rating-result" title="<?php echo e($review); ?>%">

                                <span>
                                    <?php echo e($review); ?>%
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$<?php echo e($product->price); ?></span>
                                
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--End product-cart-wrap-2-->

                </div>
            </div>
        </div>
    </section>
    <!-- Done -->
    <?php if($sale): ?>
    <section class="deals section-padding">
        <div class="container">
            <div class="row">

                <?php if($sproducts->count() > 0 && $sale->status == '1' && $sale->end >= Carbon\Carbon::now()): ?>
                <?php $__currentLoopData = $sproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 deal-co">
                    <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="background-image: url('assets/images/<?php echo e($product->front_image); ?>');">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day.</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></h6>
                            <div class="product-price"><span class="new-price">$<?php echo e($product->sale_price); ?></span><span class="old-price text-dark">$<?php echo e($product->price); ?></span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="<?php echo e(Carbon\Carbon::parse($sale->end)->format('Y/m/d h:m:s')); ?>">

                            </div>
                            <a href="/sale" class="btn hover-up">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <!-- <div class="col-lg-6 deal-co">
                    <div class="deal wow fadeIn animated" style="background-image: url('assets/images/menu-banner-8.jpg');">
                        <div class="deal-top">
                            <h2 class="text-success">Men Clothing</h2>
                            <h5>Shirt & Bag</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="#">Try something new on vacation</a></h6>
                            <div class="product-price"><span class="new-price">$178.00</span><span class="old-price">$256.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                            <a href="/shop" class="btn hover-up">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Done -->
    <section class="section-padding">
        <div class="container pb-20">
            <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
            <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                    <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($brand->logo); ?>" alt="">
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-1.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-2.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-3.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-4.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-5.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-6.png')); ?>" alt="">
                    </div>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images/brand-3.png')); ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Done -->
    <section class="bg-grey-9 section-padding">
        <div class="container pt-15 pb-25">
            <div class="heading-tab d-flex">
                <div class="heading-tab-left wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                </div>
                <div class="heading-tab-right wow fadeIn animated">
                    <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $slids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="banner-img style-2 wow fadeIn animated">
                        <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="<?php echo e($slider->title); ?>">
                        <div class="banner-text">
                            <span><?php echo e($slider->title); ?></span>
                            <h4 class="mt-5"><?php echo e($slider->subtitle); ?></h4>
                            <a href="<?php echo e($slider->link); ?>" class="text-white btn btn-success">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="banner-img style-2 wow fadeIn animated">
                        <img src="<?php echo e(asset('assets/images/banner-9.jpg')); ?>" alt="">
                        <div class="banner-text">
                            <span>Woman Area</span>
                            <h4 class="mt-5">Save 17% on <br>Clothing</h4>
                            <a href="/shop" class="text-white btn btn-danger">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-9 col-md-12">
                    <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$f_product->slug])); ?>">
                                                    <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($f_product->front_image); ?>" alt="<?php echo e($f_product->slug); ?>">
                                                    <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($f_product->back_image); ?>" alt="<?php echo e($f_product->slug); ?>">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$f_product->slug])); ?>" class="action-btn small hover-up">
                                                    <i class="fa fa-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($f_product->id); ?>','<?php echo e($f_product->name); ?>',<?php echo e($f_product->price); ?>)"><i class="fa fa-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="#" wire:click.prevent="compare('<?php echo e($f_product->id); ?>','<?php echo e($f_product->name); ?>',<?php echo e($f_product->price); ?>)"><i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Featured</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/shop"><?php echo e($f_product->category->name); ?></a>
                                            </div>
                                            <h2><a href="<?php echo e(route('product-detail',['slug'=>$f_product->slug])); ?>"><?php echo e($f_product->name); ?></a></h2>
                                            <?php
                                            $review=0;

                                            $orders=DB::table('order_items')->where('product_id',$f_product->id)->count();
                                            if ($orders != 0) {
                                                        $review = ($f_product->reviews->count() / $orders) * 100;
                                                    }
                                            ?>
                                            <div class="rating-result" title="<?php echo e($review); ?>%">

                                                <span>
                                                    <span><?php echo e($review); ?>%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$<?php echo e($f_product->price); ?> </span>
                                                
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store('<?php echo e($f_product->id); ?>','<?php echo e($f_product->name); ?>',<?php echo e($f_product->price); ?>)"><i class="fa fa-shopping-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <!--End tab-pane-->
                        <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                    <?php $__currentLoopData = $popularProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$p_product->slug])); ?>">
                                                    <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($p_product->front_image); ?>" alt="<?php echo e($p_product->slug); ?>">
                                                    <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($p_product->front_image); ?>" alt="<?php echo e($p_product->slug); ?>">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$p_product->slug])); ?>" class="action-btn small hover-up">
                                                    <i class="fa fa-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($p_product->id); ?>','<?php echo e($p_product->name); ?>',<?php echo e($p_product->price); ?>)"><i class="fa fa-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="#" wire:click.prevent="compare('<?php echo e($p_product->id); ?>','<?php echo e($p_product->name); ?>',<?php echo e($p_product->price); ?>)"><i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Popular</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/shop"><?php echo e($p_product->category->name); ?></a>
                                            </div>
                                            <h2><a href="<?php echo e(route('product-detail',['slug'=>$p_product->slug])); ?>"><?php echo e($p_product->name); ?></a></h2>
                                            <?php
                                            $review=0;

                                            $orders=DB::table('order_items')->where('product_id',$p_product->id)->count();
                                            if ($orders != 0) {
                                                        $review = ($p_product->reviews->count() / $orders) * 100;
                                                    }
                                            ?>
                                            <div class="rating-result" title="<?php echo e($review); ?>%">

                                                <span>
                                                    <span><?php echo e($review); ?>%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$<?php echo e($p_product->price); ?> </span>
                                                
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store('<?php echo e($p_product->id); ?>','<?php echo e($p_product->name); ?>',<?php echo e($p_product->price); ?>)"><i class="fa fa-shopping-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                    <?php $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$n_product->slug])); ?>">
                                                    <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($n_product->front_image); ?>" alt="<?php echo e($n_product->slug); ?>">
                                                    <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($n_product->back_image); ?>" alt="<?php echo e($n_product->slug); ?>">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a href="<?php echo e(route('product-detail',['slug'=>$n_product->slug])); ?>" class="action-btn small hover-up">
                                                    <i class="fa fa-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($n_product->id); ?>','<?php echo e($n_product->name); ?>',<?php echo e($n_product->price); ?>)"><i class="fa fa-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="#" wire:click.prevent="compare('<?php echo e($n_product->id); ?>','<?php echo e($n_product->name); ?>',<?php echo e($n_product->price); ?>)"><i class="fa fa-random"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/shop"><?php echo e($n_product->category->name); ?></a>
                                            </div>
                                            <h2><a href="<?php echo e(route('product-detail',['slug'=>$n_product->slug])); ?>"><?php echo e($n_product->name); ?></a></h2>
                                            <?php
                                            $review=0;

                                            $orders=DB::table('order_items')->where('product_id',$n_product->id)->count();
                                            if ($orders != 0) {
                                                        $review = ($n_product->reviews->count() / $orders) * 100;
                                                    }
                                            ?>
                                            <div class="rating-result" title="<?php echo e($review); ?>%">

                                                <span>
                                                    <span><?php echo e($review); ?>%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$<?php echo e($n_product->price); ?> </span>
                                                
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store('<?php echo e($n_product->id); ?>','<?php echo e($n_product->name); ?>',<?php echo e($n_product->price); ?>)"><i class="fa fa-shopping-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>
    <!-- Done -->
    <section class="section-padding">
        <div class="container pt-25 pb-20">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="section-title mb-20"><span>From</span> blog</h3>
                    <div class="post-list mb-4 mb-lg-0">
                        <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <article class="wow fadeIn animated">
                            <div class="d-md-flex d-block">
                                <div class="post-thumb d-flex mr-15">
                                    <a class="color-white" href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>">
                                        <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($blog->image); ?>" alt="<?php echo e($blog->slug); ?>">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta mb-10 mt-10">
                                        <a class="entry-meta meta-2" href="/blog"><span class="post-in font-x-small"><?php echo e($blog->category->name); ?></span></a>
                                    </div>
                                    <h4 class="post-title mb-25 text-limit-2-row">
                                        <a href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>"><?php echo e($blog->title); ?></a>
                                    </h4>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"><?php echo e(\Carbon\Carbon::parse($blog->created_at)->isoFormat("MMM Do YYYY")); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <article class="wow fadeIn animated">
                            <div class="d-md-flex d-block">
                                <div class="post-thumb d-flex mr-15">
                                    <a class="color-white" href="blog-post-fullwidth.html">
                                        <img src="<?php echo e(asset('assets/images/blog-2.jpg')); ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta mb-10 mt-10">
                                        <a class="entry-meta meta-2" href="/blog"><span class="post-in font-x-small">Fashion</span></a>
                                    </div>
                                    <h4 class="post-title mb-25 text-limit-2-row">
                                        <a href="blog-post-fullwidth.html">Qualcomm is developing a Nintendo Switch-like console, report says</a>
                                    </h4>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on">14 April 2022</span>
                                        </div>
                                        <a href="blog-post-right.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="wow fadeIn animated">
                            <div class="d-md-flex d-block">
                                <div class="post-thumb d-flex mr-15">
                                    <a class="color-white" href="blog-post-fullwidth.html">
                                        <img src="<?php echo e(asset('assets/images/blog-1.jpg')); ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta mb-10 mt-10">
                                        <a class="entry-meta meta-2" href="/blog"><span class="post-in font-x-small">Healthy</span></a>
                                    </div>
                                    <h4 class="post-title mb-25 text-limit-2-row">
                                        <a href="blog-post-fullwidth.html">Not even the coronavirus can derail 5G's global momentum</a>
                                    </h4>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on">14 April 2022</span>
                                        </div>
                                        <a href="blog-post-right.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php $__currentLoopData = $sliderss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="banner-img banner-1 wow fadeIn animated">
                                <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="<?php echo e($slider->title); ?>">
                                <div class="banner-text">
                                    <span><?php echo e($slider->title); ?></span>
                                    <h4><?php echo e($slider->subtitle); ?></h4>
                                    <a href="<?php echo e($slider->link); ?>" class="btn btn-success">Shop Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <?php $__empty_1 = true; $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <div class="banner-img mb-15 wow fadeIn animated">
                                <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="<?php echo e($slider->title); ?>">
                                <div class="banner-text">
                                    <span><?php echo e($slider->title); ?></span>
                                    <h4><?php echo e($slider->subtitle); ?></h4>
                                    <a href="<?php echo e($slider->link); ?>" class="btn btn-success">Shop Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <div class="banner-img mb-15 wow fadeIn animated">
                                <img src="<?php echo e(asset('assets/images/banner-6.jpg')); ?>" alt="">
                                <div class="banner-text">
                                    <span>Big Offer</span>
                                    <h4>Save 20% on <br>Women's socks</h4>
                                    <a href="/shop">Shop Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="banner-img banner-2 wow fadeIn animated mb-0">
                                <img src="<?php echo e(asset('assets/images/banner-7.jpg')); ?>" alt="">
                                <div class="banner-text">
                                    <span>Smart Offer</span>
                                    <h4>Save 20% on <br>Eardrop</h4>
                                    <a href="/shop">Shop Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Done -->
    <section class="mb-50">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $blog_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-12">
                    <div class="banner-bg wow fadeIn animated" style="background-image: url('assets/images/<?php echo e($slider->image); ?>')">
                        <div class="banner-content">
                            <h5 class="text-grey-4 mb-15"><?php echo e($slider->title); ?></h5>
                            <h2 class="fw-600"><?php echo e($slider->subtitle); ?></h2>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="banner-bg wow fadeIn animated" style="background-image: url('assets/images/banner-8.jpg')">
                        <div class="banner-content">
                            <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                            <h2 class="fw-600">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</h2>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<!-- Done -->
    <?php if($home_brands): ?>
    <?php $__currentLoopData = $home_brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="pt-25 pb-20">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span><?php echo e($brand->name); ?></span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2<?php echo e($brand->id); ?>-arrows"></div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2<?php echo e($brand->id); ?>">
                    <?php $__currentLoopData = $brand->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="#">
                                    <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
                                    <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="<?php echo e($product->slug); ?>">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>" class="action-btn small hover-up"><i class="fa fa-search"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">
                                    <?php if($product->featured == 1): ?>
                                    Featured
                                    <?php else: ?>
                                    Hot
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="#"><?php echo e($product->name); ?></a></h2>
                            <?php
                            $review=0;

                            $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                            if ($orders != 0) {
                                        $review = ($product->reviews->count() / $orders) * 100;
                                    }
                            ?>
                            <div class="rating-result" title="<?php echo e($review); ?>%">

                                <span>
                                    <?php echo e($review); ?>%
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$<?php echo e($product->price); ?></span>
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--End product-cart-wrap-2-->

                </div>
            </div>
        </div>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- Done -->
    <section class="mb-45">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $blog_slids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                        <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($slider->image); ?>" alt="<?php echo e($slider->title); ?>">
                        <div class="banner-text">
                            <span><?php echo e($slider->title); ?></span>
                            <h4><?php echo e($slider->subtitle); ?></h4>
                            <a href="<?php echo e($slider->link); ?>" class="btn btn-success">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                        <img src="assets/images/banner-10.jpg" alt="">
                        <div class="banner-text">
                            <span>Shoes Zone</span>
                            <h4>Save 17% on <br>All Items</h4>
                            <a href="/shop">Shop Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Recent Sold Item</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <?php $__empty_1 = true; $__currentLoopData = $Rproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo e(route('product-detail',['slug'=>$prod->product->slug])); ?>"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($prod->product->front_image); ?>" alt="<?php echo e($prod->product->name); ?>"></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="<?php echo e(route('product-detail',['slug'=>$prod->product->slug])); ?>"><?php echo e($prod->product->name); ?>t</a>
                                </h4>
                                <div class="product-price">
                                    <span>$<?php echo e($prod->product->price); ?> </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-3.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Fish Print Patched T-shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-4.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Vintage Floral Print Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-5.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Multi-color Stripe Circle Print T-Shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Top Selling</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <?php $__empty_1 = true; $__currentLoopData = $tproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo e(route('product-detail',['slug'=>$prod->product->slug])); ?>"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($prod->product->front_image); ?>" alt="<?php echo e($prod->product->name); ?>"></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="<?php echo e(route('product-detail',['slug'=>$prod->product->slug])); ?>"><?php echo e($prod->product->name); ?></a>
                                </h4>
                                <div class="product-price">
                                    <span>$<?php echo e($prod->product->price); ?> </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-6.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Geometric Printed Long Sleeve Blosue</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-7.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Print Patchwork Maxi Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="#"><img src="assets/images/thumbnail-8.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="#">Daisy Floral Print Straps Jumpsuit</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Hot Releases</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <?php $__empty_1 = true; $__currentLoopData = $hotProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo e(route('product-detail',['slug'=>$n_product->slug])); ?>"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->name); ?>"></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="<?php echo e(route('product-detail',['slug'=>$n_product->slug])); ?>"><?php echo e($product->name); ?></a>
                                </h4>
                                <div class="product-price">
                                    <span>$<?php echo e($product->price); ?> </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="/shop"><img src="assets/images/thumbnail-9.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="/shop">Floral Print Casual Cotton Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="/shop"><img src="assets/images/thumbnail-1.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="/shop">Ruffled Solid Long Sleeve Blouse</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="/shop"><img src="assets/images/thumbnail-2.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="/shop">Multi-color Print V-neck T-Shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    
                                </div>
                            </div>
                        </article>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>