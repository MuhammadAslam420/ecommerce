<div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
    <div class="widget-header position-relative mb-20 pb-10">
        <h5 class="widget-title mb-10">New products</h5>
        <div class="bt-1 border-color-1"></div>
    </div>
    <?php
    $products=DB::table('products')->inRandomOrder()->orderBy('id','desc')->take(3)->get();
    ?>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="single-post clearfix">
        <div class="image">
            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
        </div>
        <div class="content pt-10">
            <h5><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></h5>
            <p class="price mb-0 mt-5">$<?php echo e($product->price); ?></p>
            <div class="product-rate">
                <div class="product-rating" style="width:90%"></div>
            </div>
        </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="single-post clearfix">
        <div class="image">
            <img src="<?php echo e(asset('assets/images/thumbnail-3.jpg')); ?>" alt="#">
        </div>
        <div class="content pt-10">
            <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
            <p class="price mb-0 mt-5">$99.50</p>
            <div class="product-rate">
                <div class="product-rating" style="width:90%"></div>
            </div>
        </div>
    </div>
    <div class="single-post clearfix">
        <div class="image">
            <img src="<?php echo e(asset('assets/images/thumbnail-4.jpg')); ?>" alt="#">
        </div>
        <div class="content pt-10">
            <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
            <p class="price mb-0 mt-5">$89.50</p>
            <div class="product-rate">
                <div class="product-rating" style="width:80%"></div>
            </div>
        </div>
    </div>
    <div class="single-post clearfix">
        <div class="image">
            <img src="<?php echo e(asset('assets/images/thumbnail-5.jpg')); ?>" alt="#">
        </div>
        <div class="content pt-10">
            <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
            <p class="price mb-0 mt-5">$25</p>
            <div class="product-rate">
                <div class="product-rating" style="width:60%"></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/components/product_sidebar.blade.php ENDPATH**/ ?>