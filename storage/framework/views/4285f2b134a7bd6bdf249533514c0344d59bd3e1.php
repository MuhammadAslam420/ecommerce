<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
    .social-btn-sp #social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    .social-btn-sp #social-links ul li {
        display: inline-block;
    }
    .social-btn-sp #social-links ul li a {
        padding: 5px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 30px;
    }
    table #social-links{
        display: inline-table;
    }
    table #social-links ul li{
        display: inline;
    }
    table #social-links ul li a{
        padding: 5px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 15px;
        background: #e3e3ea;
    }
</style>
<?php $__env->stopPush(); ?>
<main class="main" wire:ignore>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <i class="fa fa-arrow-right"></i> <?php echo e($product->category->name); ?>

                <i class="fa fa-arrow-right"></i> <?php echo e($product->name); ?>

            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-6 col-sm-12 col-xs-12" style="background:white;">
                                <div class="detail-gallery" wire:ignore>
                                    <span class="zoom-icon"><i class="fa fa-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider" style="background:white;">
                                        <figure class="border-radius-10">
                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="product image">
                                        </figure>
                                        <?php
                                        $images=explode(',',$product->images);
                                        ?>
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <?php if($image): ?>
                                           <figure class="border-radius-10">
                                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($image); ?>" alt="product image">
                                        </figure>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                        <div><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="product image"></div>
                                        <div><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="product image"></div>
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($image): ?>
                                            <div><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($image); ?>" alt="product image"></div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <?php if($sale): ?>
                            <?php if($product->sale_price > 0 && $sale->status == '1' && $sale->end >= Carbon\Carbon::now()): ?>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail"><?php echo e($product->name); ?></h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span style="display:flex;flex-direction:row;"> Brands: <a href="shop-grid-right.html" style="text-transform: capitalize;"><?php echo e($product->brand->name); ?></a></span>
                                        </div>
                                        <div class="product-rate-cover text-end">
                                            <?php
                                            $review=0;

                                            $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                                            if ($orders != 0) {
                                                        $review = ($product->reviews->count() / $orders) * 100;
                                                    }
                                            ?>
                                            <div class="product-rate ">
                                                <div class="product-rating" style="width:<?php echo e($review); ?>%">
                                                    <span><?php echo e($review); ?>%</span>
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (<?php echo e($product->reviews->count()); ?> reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span class="text-brand">$<?php echo e($product->sale_price); ?></span></ins>
                                            <ins><span class="old-price font-md ml-15">$<?php echo e($product->price); ?></span></ins>
                                            <span class="save-price  font-md color3 ml-15"><?php echo e(number_format($product->sale_price / $product->price * 100, 0)); ?>% Off</span>
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-30">
                                        <p><?php echo e($product->short_description); ?></p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fa fa-crown mr-5"></i> 1 Year <?php echo e($product->brand->name); ?> Warranty</li>
                                            <li class="mb-10"><i class="fa fa-refresh mr-5"></i> 30 Day Return Policy</li>
                                            <li><i class="fa fa-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>

                                        <ul class="list-filter color-filter" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setColor('<?php echo e($attribute->color); ?>')"><span class="product-color-<?php echo e($attribute->color); ?>"></span></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>

                                    </div>
                                    <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>

                                        <ul class="list-filter size-filter font-small" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setSize('<?php echo e($attribute->size); ?>')"><?php echo e($attribute->size); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <?php if(Session::has('message')): ?>
                                    <div class="alert alert-success text-dark"><?php echo e(Session::get('message')); ?></div>
                                    <?php endif; ?>
                                    <div class="detail-extralink">
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)">Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-random"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#"><?php echo e($product->SKU); ?></a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag"><?php echo e($product->category->name); ?></a></li>
                                        <li>Availability:<span class="in-stock text-success ml-5"><?php echo e(number_format($product->quantity,0)); ?> Items <?php echo e($product->stock); ?></span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                            <?php else: ?>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail"><?php echo e($product->name); ?></h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span style="display:flex;flex-direction:row;"> Brands: <a href="shop-grid-right.html" style="text-transform: capitalize;"><?php echo e($product->brand->name); ?></a></span>
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
                                                    <span><?php echo e($review); ?>%</span>
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
                                        <p><?php echo e($product->short_description); ?></p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fa fa-crown mr-5"></i> 1 Year <?php echo e($product->brand->name); ?> Warranty</li>
                                            <li class="mb-10"><i class="fa fa-refresh mr-5"></i> 30 Day Return Policy</li>
                                            <li><i class="fa fa-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>
                                        <ul class="list-filter color-filter" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setColor('<?php echo e($attribute->color); ?>')"><span class="product-color-<?php echo e($attribute->color); ?>"></span></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>

                                        <ul class="list-filter size-filter font-small" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setSize('<?php echo e($attribute->size); ?>')"><?php echo e($attribute->size); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <?php if(Session::has('message')): ?>
                                    <div class="alert alert-success text-dark"><?php echo e(Session::get('message')); ?></div>
                                    <?php endif; ?>
                                    <div class="detail-extralink">
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)">Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#"><?php echo e($product->SKU); ?></a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag"><?php echo e($product->category->name); ?></a></li>
                                        <li>Availability:<span class="in-stock text-success ml-5"><?php echo e(number_format($product->quantity,0)); ?> Items <?php echo e($product->stock); ?></span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                            <?php endif; ?>
                            <?php else: ?>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail"><?php echo e($product->name); ?></h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span style="display:flex;flex-direction:row;"> Brands: <a href="shop-grid-right.html" style="text-transform: capitalize;"><?php echo e($product->brand->name); ?></a></span>
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
                                                    <span><?php echo e($review); ?>%</span>
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (<?php echo e($product->reviews->count()); ?> reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span class="text-brand">$<?php echo e($product->price); ?></span></ins>
                                            <!-- <ins><span class="old-price font-md ml-15">$200.00</span></ins> -->
                                            <!-- <span class="save-price  font-md color3 ml-15">25% Off</span> -->
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-30">
                                        <p><?php echo e($product->short_description); ?></p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fa fa-crown mr-5"></i> 1 Year AL <?php echo e($product->brand->name); ?> Warranty</li>
                                            <li class="mb-10"><i class="fa fa-refresh mr-5"></i> 30 Day Return Policy</li>
                                            <li><i class="fa fa-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>
                                        <ul class="list-filter color-filter" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setColor('<?php echo e($attribute->color); ?>')"><span class="product-color-<?php echo e($attribute->color); ?>"></span></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>

                                        <ul class="list-filter size-filter font-small" >
                                            <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#" wire:click="setSize('<?php echo e($attribute->size); ?>')"><?php echo e($attribute->size); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <?php if(Session::has('message')): ?>
                                    <div class="alert alert-success text-dark"><?php echo e(Session::get('message')); ?></div>
                                    <?php endif; ?>
                                    <div class="detail-extralink">
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)">Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->price); ?>)"><i class="fa fa-random"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#"><?php echo e($product->SKU); ?></a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag"><?php echo e($product->category->name); ?></a></li>
                                        <li>Availability:<span class="in-stock text-success ml-5"><?php echo e(number_format($product->quantity,0)); ?> Items <?php echo e($product->stock); ?></span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 m-auto entry-main-content">
                                <h2 class="section-title style-1 mb-30">Description</h2>
                                <div class="description mb-50">
                                    <p><?php echo $product->description; ?>

                                    </p>

                                </div>
                                <div class="social-icons single-share">
                                    <ul class="text-grey-5 d-inline-block">
                                        <li><strong class="mr-10">Share this:</strong></li>
                                        <li>
                                            <div class="social-btn-sp">
                                             <?php echo $shareButtons; ?>

                                            </div>
                                        </li>
                                    </ul>

                                </div>
                                <h3 class="section-title style-1 mb-30 mt-30">Reviews (<?php echo e($product->reviews->count()); ?>)</h3>
                                <!--Comments-->
                                <div class="comments-area style-2">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4 class="mb-30">Customer questions & answers</h4>
                                            <div class="comment-list">
                                                <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <img src="<?php echo e(asset('assets/images/avatar-5.jpg')); ?>" alt="">
                                                            <h6><a href="#"><?php echo e($review->user->name); ?></a></h6>
                                                            <p class="font-xxs"><?php echo e(\Carbon\Carbon::parse($review->created_at)->isoFormat('MM Do YYYY')); ?></p>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width:90%">
                                                                </div>
                                                            </div>
                                                            <p><?php echo e($review->comment); ?>.</p>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="font-xs mr-30"><?php echo e($review->created_at); ?> </p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <!--single-comment -->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="mb-30">Customer reviews</h4>


                                            <div class="d-flex mb-30">
                                                <div class="product-rate d-inline-block mr-15">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <h6>
                                                    <?php
                                                    $rating=0;
                                                    if($product->reviews->count() != 0)
                                                    {
                                                        $rating= $product->reviews->sum('ratting') / $product->reviews->count();
                                                    }

                                                    ?>
                                                    <?php echo e($rating); ?> out of <?php echo e($product->reviews->sum('ratting')); ?>

                                                </h6>
                                            </div>
                                            <div class="progress">
                                                <span>5 star</span>
                                                <?php
                                                $rating=0;
                                                if($product->reviews->count() != 0)
                                                {
                                                    $avg= $product->reviews->where('ratting',5)->count();
                                                    $total= $product->reviews->count();
                                                    $rating=((($avg) / ($total)) *100);
                                                }

                                                ?>

                                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($rating); ?>%;" aria-valuenow="<?php echo e($rating); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($rating); ?>%</div>
                                            </div>
                                            <div class="progress">
                                                <span>4 star</span>
                                                <?php
                                                $rating=0;
                                                if($product->reviews->count() != 0)
                                                {
                                                    $avg= $product->reviews->where('ratting',4)->count();
                                                    $total= $product->reviews->count();
                                                    $rating=((($avg) / ($total)) *100);                                                }

                                                ?>
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($rating); ?>%;" aria-valuenow="<?php echo e($rating); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($rating); ?>%</div>
                                            </div>
                                            <div class="progress">
                                                <span>3 star</span>
                                                <?php
                                                $rating=0;
                                                if($product->reviews->count() != 0)
                                                {
                                                    $avg= $product->reviews->where('ratting',3)->count();
                                                    $total= $product->reviews->count();
                                                    $rating=((($avg) / ($total)) *100);                                                }

                                                ?>
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($rating); ?>%;" aria-valuenow="<?php echo e($rating); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($rating); ?>%</div>
                                            </div>
                                            <div class="progress">
                                                <span>2 star</span>
                                                <?php
                                                $rating=0;
                                                if($product->reviews->count() != 0)
                                                {
                                                    $avg= $product->reviews->where('ratting',2)->count();
                                                    $total= $product->reviews->count();
                                                    $rating=((($avg) / ($total)) *100);                                                }

                                                ?>
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($rating); ?>%;" aria-valuenow="<?php echo e($rating); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($rating); ?>%</div>
                                            </div>
                                            <div class="progress mb-30">
                                                <span>1 star</span>
                                                <?php
                                                $rating=0;
                                                if($product->reviews->count() != 0)
                                                {
                                                    $avg= $product->reviews->where('ratting',1)->count();
                                                    $total= $product->reviews->count();
                                                    $rating=((($avg) / ($total)) *100);                                                }

                                                ?>
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo e($rating); ?>%;" aria-valuenow="<?php echo e($rating); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($rating); ?>%</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-12">
                                <h3 class="section-title style-1 mb-30">Related products</h3>
                            </div>
                            <div class="col-12">
                                <div class="row related-products" wire:ignore>
                                    <?php $__empty_1 = true; $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap small hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="<?php echo e(route('product-detail',['slug'=>$prod->slug])); ?>" tabindex="0">
                                                        <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($prod->front_image); ?>" alt="<?php echo e($prod->slug); ?>">
                                                        <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($prod->back_image); ?>" alt="<?php echo e($prod->slug); ?>">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a class="action-btn small hover-up" href="<?php echo e(route('product-detail',['slug'=>$prod->slug])); ?>"><i class="fa fa-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" wire:click="wishlist('<?php echo e($prod->id); ?>','<?php echo e($prod->name); ?>',<?php echo e($prod->price); ?>)" tabindex="0"><i class="fa fa-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="#" wire:click="compare('<?php echo e($prod->id); ?>','<?php echo e($prod->name); ?>',<?php echo e($prod->price); ?>)" tabindex="0"><i class="fa fa-random"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="<?php echo e(route('product-detail',['slug'=>$prod->slug])); ?>" tabindex="0"><?php echo e($prod->name); ?></a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$<?php echo e($prod->price); ?> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap small hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop" tabindex="0">
                                                        <img class="default-img" src="<?php echo e(asset('assets/imgs/shop/product-2-1.jpg')); ?>" alt="">
                                                        <img class="hover-img" src="<?php echo e(asset('assets/imgs/shop/product-2-2.jpg')); ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa fa-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-random"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="/shop" tabindex="0">Ulstra Bass Headphone</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap small hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop" tabindex="0">
                                                        <img class="default-img" src="<?php echo e(asset('assets/imgs/shop/product-3-1.jpg')); ?>" alt="">
                                                        <img class="hover-img" src="<?php echo e(asset('assets/imgs/shop/product-4-2.jpg')); ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa fa-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-random"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="/shop" tabindex="0">Smart Bluetooth Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap small hover-up">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop" tabindex="0">
                                                        <img class="default-img" src="<?php echo e(asset('assets/imgs/shop/product-4-1.jpg')); ?>" alt="">
                                                        <img class="hover-img" src="<?php echo e(asset('assets/imgs/shop/product-4-2.jpg')); ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa fa-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-random"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="/shop" tabindex="0">HomeSpeak 12UEA Goole</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$738.85 </span>
                                                    <span class="old-price">$1245.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap small hover-up mb-0">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop" tabindex="0">
                                                        <img class="default-img" src="<?php echo e(asset('assets/imgs/shop/product-5-1.jpg')); ?>" alt="">
                                                        <img class="hover-img" src="<?php echo e(asset('assets/imgs/shop/product-3-2.jpg')); ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fa fa-search"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up" href="#" tabindex="0"><i class="fa fa-random"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <h2><a href="shop-product-right.html" tabindex="0">Dadua Camera 4K 2022EF</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$89.8 </span>
                                                    <span class="old-price">$98.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img banner-big wow fadeIn f-none animated mt-50">
                            <img class="border-radius-10" src="<?php echo e(asset('assets/images/banner-4.png')); ?>" alt="">
                            <div class="banner-text">
                                <h4 class="mb-15 mt-40">Repair Services</h4>
                                <h2 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/product-detail-component.blade.php ENDPATH**/ ?>