  <?php
  $setting=DB::table("home_page_settings")->first();
  ?>
  <?php if($setting): ?>
  <header class="header-area header-style-3 header-height-2">
      <div class="header-top header-top-ptb-1 d-none d-lg-block">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-4">
                      <div class="header-info">
                          <ul>
                              <li><i class="fa fa-phone"></i> <a href="#"><?php echo e($setting->mobile); ?></a></li>
                              <li><i class="fa fa-map-marker"></i><a href="/contact"><?php echo e($setting->address); ?></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-4">
                      <div class="text-center">
                          <div id="news-flash" class="d-inline-block">
                              <ul>
                                <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($announce->title); ?> <a href="<?php echo e($announce->link); ?>" class="text-warning mr-2" style="font-weight:700;">View details</a></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                      <div class="header-info header-info-right">
                          <ul>
                              <li>
                                  <a class="language-dropdown-active" href="#"> <i class="fa fa-globe"></i> English <i class="fa fa-angle-small-down"></i></a>
                                  <ul class="language-dropdown">
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-fr.png')); ?>" alt="">Français</a></li>
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-dt.png')); ?>" alt="">Deutsch</a></li>
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-ru.png')); ?>" alt="">Pусский</a></li>
                                  </ul>
                              </li>
                              <li><i class="fa fa-user"></i><a href="<?php echo e(route('register')); ?>">SignUp</a></li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-middle header-middle-ptb-1 d-none d-lg-block" style="background:white;">
          <div class="container">
              <div class="header-wrap">
                  <div class="logo logo-width-1">
                      <a href="/"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($setting->web_logo); ?>" alt="logo"></a>
                  </div>
                  <div class="header-right">
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("header-search-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-0');
} else {
    $response = \Livewire\Livewire::mount("header-search-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                      <div class="header-action-right">
                          <div class="header-action-2" wire:ignore>
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("compare-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-1');
} else {
    $response = \Livewire\Livewire::mount("compare-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("wishlist-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-2');
} else {
    $response = \Livewire\Livewire::mount("wishlist-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("cart-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-3');
} else {
    $response = \Livewire\Livewire::mount("cart-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                              <?php if(Route::has('login')): ?>
                              <?php if(auth()->guard()->check()): ?>
                              <?php if(Auth::user()->utype ==='USR'): ?>
                              <div class="header-action-icon-2">
                                  <a href="#">
                                      <i class="fa fa-user-circle text-dark"></i>

                                  </a>
                                  <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                      <ul>
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
                                  </div>
                              </div>
                              <?php elseif(Auth::user()->utype ==='ADM'): ?>
                              <div class="header-action-icon-2">
                                  <a href="#">
                                      <i class="fa fa-user-circle text-dark"></i>

                                  </a>
                                  <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                      <ul>
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
                                  </div>
                              </div>
                              <?php endif; ?>
                              <?php else: ?>
                              <div class="header-action-icon-2">
                                  <a href="#">
                                      <i class="fa fa-user-circle text-dark"></i>

                                  </a>

                                  <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                      <ul>
                                          <li>
                                              <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user mr-10"></i>Login</a>
                                          </li>


                                      </ul>
                                  </div>
                              </div>
                              <?php endif; ?>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-bottom header-bottom-bg-color sticky-bar">
          <div class="container">
              <div class="header-wrap header-space-between position-relative  main-nav">
                  <div class="logo logo-width-1 d-block d-lg-none">
                      <a href="/"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($setting->web_logo); ?>" alt="logo"></a>
                  </div>
                  <div class="header-nav d-none d-lg-flex">
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("menu-categoriescomponent")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-4');
} else {
    $response = \Livewire\Livewire::mount("menu-categoriescomponent");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("menu-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-5');
} else {
    $response = \Livewire\Livewire::mount("menu-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>
                  <div class="hotline d-none d-lg-block">
                      <p><i class="fa fa-mobile"></i><span>Hotline</span> <?php echo e($setting->hotline); ?> </p>
                  </div>
                  <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                  <div class="header-action-right d-block d-lg-none">
                      <div class="header-action-2">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("compare-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-6');
} else {
    $response = \Livewire\Livewire::mount("compare-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("wishlist-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-7')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-7');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-7');
} else {
    $response = \Livewire\Livewire::mount("wishlist-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("cart-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-8')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-8');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-8');
} else {
    $response = \Livewire\Livewire::mount("cart-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                          <div class="header-action-icon-2 d-block d-lg-none">
                              <div class="burger-icon burger-icon-white">
                                  <span class="burger-icon-top"></span>
                                  <span class="burger-icon-mid"></span>
                                  <span class="burger-icon-bottom"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <?php else: ?>
  <header class="header-area header-style-3 header-height-2">
      <div class="header-top header-top-ptb-1 d-none d-lg-block">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-4">
                      <div class="header-info">
                          <ul>
                              <li><i class="fa fa-phone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                              <li><i class="fa fa-map-marker"></i><a href="/contact">Our location</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-4">
                      <div class="text-center">
                          <div id="news-flash" class="d-inline-block">
                              <ul>
                                  <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                  <li>Supper Value Deals - Save more with coupons</li>
                                  <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                      <div class="header-info header-info-right">
                          <ul>
                              <li>
                                  <a class="language-dropdown-active" href="#"> <i class="fa fa-globe"></i> English <i class="fa fa-angle-small-down"></i></a>
                                  <ul class="language-dropdown">
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-fr.png')); ?>" alt="">Français</a></li>
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-dt.png')); ?>" alt="">Deutsch</a></li>
                                      <li><a href="#"><img src="<?php echo e(asset('assets/images/flag-ru.png')); ?>" alt="">Pусский</a></li>
                                  </ul>
                              </li>
                              <li><i class="fa fa-user"></i><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                              <li><a href="<?php echo e(route('register')); ?>">SignUp</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
          <div class="container">
              <div class="header-wrap">
                  <div class="logo logo-width-1">
                      <a href="/"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo"></a>
                  </div>
                  <div class="header-right">
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("header-search-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-9')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-9');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-9');
} else {
    $response = \Livewire\Livewire::mount("header-search-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                      <div class="header-action-right">
                          <div class="header-action-2">
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("wishlist-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-10')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-10');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-10');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-10');
} else {
    $response = \Livewire\Livewire::mount("wishlist-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-10', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("cart-count-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-11')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-11');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-11');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-11');
} else {
    $response = \Livewire\Livewire::mount("cart-count-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-11', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-bottom header-bottom-bg-color sticky-bar">
          <div class="container">
              <div class="header-wrap header-space-between position-relative  main-nav">
                  <div class="logo logo-width-1 d-block d-lg-none">
                      <a href="/"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo"></a>
                  </div>
                  <div class="header-nav d-none d-lg-flex">
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("menu-categoriescomponent")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-12')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-12');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-12');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-12');
} else {
    $response = \Livewire\Livewire::mount("menu-categoriescomponent");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-12', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("menu-component")->html();
} elseif ($_instance->childHasBeenRendered('l338980975-13')) {
    $componentId = $_instance->getRenderedChildComponentId('l338980975-13');
    $componentTag = $_instance->getRenderedChildComponentTagName('l338980975-13');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l338980975-13');
} else {
    $response = \Livewire\Livewire::mount("menu-component");
    $html = $response->html();
    $_instance->logRenderedChild('l338980975-13', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>
                  <div class="hotline d-none d-lg-block">
                      <p><i class="fa fa-mobile"></i><span>Hotline</span> 1900 - 888 </p>
                  </div>
                  <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                  <div class="header-action-right d-block d-lg-none">
                      <div class="header-action-2">
                          <div class="header-action-icon-2">
                              <a href="shop-wishlist.html">
                                  <img alt="Evara" src="<?php echo e(asset('assets/images/icon-heart.svg')); ?>">
                                  <span class="pro-count white">4</span>
                              </a>
                          </div>
                          <div class="header-action-icon-2">
                              <a class="mini-cart-icon" href="shop-cart.html">
                                  <img alt="Evara" src="<?php echo e(asset('assets/images/icon-cart.svg')); ?>">
                                  <span class="pro-count white">2</span>
                              </a>
                              <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                  <ul>
                                      <li>
                                          <div class="shopping-cart-img">
                                              <a href="shop-product-right.html"><img alt="Evara" src="<?php echo e(asset('assets/images/thumbnail-3.jpg')); ?>"></a>
                                          </div>
                                          <div class="shopping-cart-title">
                                              <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                              <h3><span>1 × </span>$800.00</h3>
                                          </div>
                                          <div class="shopping-cart-delete">
                                              <a href="#"><i class="fa fa-cross-small"></i></a>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="shopping-cart-img">
                                              <a href="shop-product-right.html"><img alt="Evara" src="<?php echo e(asset('assets/images/thumbnail-4.jpg')); ?>"></a>
                                          </div>
                                          <div class="shopping-cart-title">
                                              <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                              <h3><span>1 × </span>$3500.00</h3>
                                          </div>
                                          <div class="shopping-cart-delete">
                                              <a href="#"><i class="fa fa-cross-small"></i></a>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="shopping-cart-footer">
                                      <div class="shopping-cart-total">
                                          <h4>Total <span>$383.00</span></h4>
                                      </div>
                                      <div class="shopping-cart-button">
                                          <a href="shop-cart.html">View cart</a>
                                          <a href="shop-checkout.html">Checkout</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="header-action-icon-2 d-block d-lg-none">
                              <div class="burger-icon burger-icon-white">
                                  <span class="burger-icon-top"></span>
                                  <span class="burger-icon-mid"></span>
                                  <span class="burger-icon-bottom"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <?php endif; ?>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/header/headercomponent.blade.php ENDPATH**/ ?>