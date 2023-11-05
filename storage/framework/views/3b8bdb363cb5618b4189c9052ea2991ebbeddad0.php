<div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
    <nav>
        <ul>
            <li><a class="active" href="/">Home</a>

            </li>
            <li>
                <a href="<?php echo e(route('about')); ?>">About</a>
            </li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/sale">Sale</a></li>
                     <li><a href="#">Brands <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                <?php
                $brands=DB::table('brands')->get();
                ?>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('brand',['id'=>$brand->id])); ?>"><?php echo e($brand->name); ?></a></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

            </li>
            <li class="position-static"><a href="#">Best Collection <i class="fa fa-angle-down"></i></a>
                <ul class="mega-menu">
                <?php $__currentLoopData = $hcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="sub-mega-menu sub-mega-menu-width-22">
                        <a class="menu-title" href="<?php echo e(route('category',['slug'=>$category->slug])); ?>"><?php echo e($category->name); ?></a>
                        <ul>
                        <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <li class="sub-mega-menu sub-mega-menu-width-34">
                        <div class="menu-banner-wrap">
                            <a href="shop-product-right.html"><img src="assets/images/menu-banner.jpg" alt="Evara"></a>
                            <div class="menu-banner-content">
                                <h4>Hot deals</h4>
                                <h3>Don't miss<br> Trending</h3>
                                <div class="menu-banner-price">
                                    <span class="new-price text-success">Save to 50%</span>
                                </div>
                                <div class="menu-banner-btn">
                                    <a href="shop-product-right.html">Shop now</a>
                                </div>
                            </div>
                            <div class="menu-banner-discount">
                                <h3>
                                    <span>35%</span>
                                    off
                                </h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>

            <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="/blog">Blog </a></li>
                     <li><a href="/contact">Contact</a></li>
                    <li><a href="/purchase-guide">Purchase Guide</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms-condition">Terms of Service</a></li>

                </ul>
            </li>

        </ul>
    </nav>
</div>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/menu-component.blade.php ENDPATH**/ ?>