<div class="mobile-header-active mobile-header-wrapper-style" wire:ignore>
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="/"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($setting->mobile_logo); ?>" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="fa fa-arrow-up"></i>
                    <i class="fa fa-arrow-down"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form method="get" action="<?php echo e(route('search')); ?>">
                    <input type="text" placeholder="Search for items…" name="search" wire:model="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fa fa-th"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('category',['slug'=>$category->slug])); ?>"><i class="evara-font-dress"></i><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop">shop</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                            <ul class="dropdown">
                                <?php $__currentLoopData = $megaMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#"><?php echo e($menu->name); ?></a>
                                    <ul class="dropdown">
                                        <?php $__currentLoopData = $menu->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>">Dresses</a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li><a href="/blog">Blog</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/purchase-guide">Purchase Guide</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                                <li><a href="/terms-condition">Terms of Service</a></li>
                            </ul>
                        </li>
                        <li><a href="#">English</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="/contact"> <?php echo e($setting->address); ?> </a>
                </div>
                <?php if(Route::has('login')): ?>
                              <?php if(auth()->guard()->check()): ?>
                              <?php if(Auth::user()->utype ==='USR'): ?>
                              <ul class="mobile-menu">
                                          <li>
                                              <a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa fa-user mr-10"></i><?php echo e(Auth::user()->name); ?> Dashboard</a>
                                          </li>
                                          <li>
                                              <a href="<?php echo e(route('user.orders')); ?>"><i class="fa fa-gift mr-10"></i>Manage Order</a>
                                          </li>

                                          <li>
                                              <a href="<?php echo e(route('user_change.password')); ?>"><i class="fa fa-lock mr-10"></i>Change Password</a>
                                          </li>
                                          <li>
                                              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out mr-10"></i>Logout</a>
                                          </li>
                                          <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                              <?php echo csrf_field(); ?>
                                          </form>

                                      </ul>

                              <?php elseif(Auth::user()->utype ==='ADM'): ?>
                              <ul class="mobile-menu">
                                          <li>
                                              <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-user mr-10"></i><?php echo e(Auth::user()->name); ?> Dashboard</a>
                                          </li>

                                          <li>
                                              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out mr-10"></i>Logout</a>
                                          </li>
                                          <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                              <?php echo csrf_field(); ?>
                                          </form>

                                      </ul>

                              <?php endif; ?>
                              <?php else: ?>
                              <div class="single-mobile-header-info">
                                <a href="<?php echo e(route('login')); ?>">Log In</a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="<?php echo e(route('register')); ?>">Sign Up </a>
                            </div>
                              <?php endif; ?>
                              <?php endif; ?>

                <div class="single-mobile-header-info">
                    <a href="#"><?php echo e($setting->mobile); ?> </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="<?php echo e($setting->facebook); ?>"><img src="<?php echo e(asset('assets/images/icon-facebook.svg')); ?>" alt=""></a>
                <a href="<?php echo e($setting->twitter); ?>"><img src="<?php echo e(asset('assets/images/icon-twitter.svg')); ?>" alt=""></a>
                <a href="<?php echo e($setting->instagram); ?>"><img src="<?php echo e(asset('assets/images/icon-instagram.svg')); ?>" alt=""></a>
                <a href="<?php echo e($setting->pinterest); ?>"><img src="<?php echo e(asset('assets/images/icon-pinterest.svg')); ?>" alt=""></a>
                <a href="<?php echo e($setting->youtube); ?>"><img src="<?php echo e(asset('assets/images/icon-youtube.svg')); ?>" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/header/mobile-header-component.blade.php ENDPATH**/ ?>