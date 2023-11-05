 <main class="main" wire:ignore>
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <i class="fa fa-arrow-right"></i> Sale
             </div>
         </div>
     </div>
     <section class="mt-50 mb-50">
         <div class="container">
             <div class="row flex-row-reverse">
                 <div class="col-lg-9">
                     <div class="shop-product-fillter">
                         <div class="totall-product">
                             <p> We found <strong class="text-brand"><?php echo e($products->count()); ?></strong> items for you!</p>
                         </div>
                         <div class="sort-by-product-area">
                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.list','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.grid','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.right_grid','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('right_grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.perPage','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('perPage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sort','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sort'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                         </div>
                     </div>
                     <div class="row product-grid-3">
                         <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                         <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                             <div class="product-cart-wrap mb-30">
                                 <div class="product-img-action-wrap">
                                     <div class="product-img product-img-zoom">
                                         <a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>">
                                             <img class="default-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->front_image); ?>" alt="<?php echo e($product->slug); ?>">
                                             <img class="hover-img" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($product->back_image); ?>" alt="<?php echo e($product->slug); ?>">
                                         </a>
                                     </div>
                                     <div class="product-action-1">
                                         <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal-<?php echo e($product->id); ?>">
                                             <i class="fa fa-search"></i></a>
                                         <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-heart"></i></a>
                                         <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-random"></i></a>
                                     </div>
                                     <div class="product-badges product-badges-position product-badges-mrg">
                                         <span class="hot">Hot</span>
                                     </div>
                                 </div>
                                 <div class="product-content-wrap">
                                     <div class="product-category">
                                         <a href="#"><?php echo e($product->category->name); ?></a>
                                     </div>
                                     <h2><a href="<?php echo e(route('product-detail',['slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></h2>
                                     <div class="rating-result" title="90%">
                                         <span>
                                             <span>90%</span>
                                         </span>
                                     </div>
                                     <div class="product-price">
                                         <span>$<?php echo e($product->sale_price); ?> </span>
                                         <span class="old-price">$<?php echo e($product->price); ?></span>
                                     </div>
                                     <div class="product-action-1 show">
                                         <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-shopping-bag"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal fade custom-modal" id="quickViewModal-<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
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
                                                         <li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                                         <li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                                         <li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                                         <li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
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
                                                                 <div class="product-rating" style="width:90%">
                                                                 </div>
                                                             </div>
                                                             <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                                         </div>
                                                     </div>
                                                     <div class="clearfix product-price-cover">
                                                         <div class="product-price primary-color float-left">
                                                             <ins><span class="text-brand">$<?php echo e($product->sale_price); ?></span></ins>
                                                             <ins><span class="old-price font-md ml-15">$<?php echo e($product->price); ?></span></ins>
                                                             <span class="save-price  font-md text-dark ml-15"><?php echo e(number_format(($product->sale_price / $product->price)*100,0)); ?>% Off</span>
                                                         </div>
                                                     </div>
                                                     <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                     <div class="short-desc mb-30">
                                                         <p class="font-sm"><?php echo e($product->short_description); ?></p>
                                                     </div>

                                                     <div class="attr-detail attr-color mb-15">
                                                         <strong class="mr-10">Color</strong>
                                                         <ul class="list-filter color-filter">
                                                             <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                                             <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                                             <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                                             <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                                             <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                                             <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                                             <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                                         </ul>
                                                     </div>
                                                     <div class="attr-detail attr-size">
                                                         <strong class="mr-10">Size</strong>
                                                         <ul class="list-filter size-filter font-small">
                                                             <li><a href="#">S</a></li>
                                                             <li class="active"><a href="#">M</a></li>
                                                             <li><a href="#">L</a></li>
                                                             <li><a href="#">XL</a></li>
                                                             <li><a href="#">XXL</a></li>
                                                         </ul>
                                                     </div>
                                                     <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                                     <div class="detail-extralink">

                                                         <div class="product-extra-link2">
                                                             <button type="button" class="button button-add-to-cart" wire:click.prevent="store('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)">Add to cart</button>
                                                             <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-heart"></i></a>
                                                             <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('<?php echo e($product->id); ?>','<?php echo e($product->name); ?>',<?php echo e($product->sale_price); ?>)"><i class="fa fa-random"></i></a>
                                                         </div>
                                                     </div>
                                                     <ul class="product-meta font-xs color-grey mt-50">
                                                         <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                                         <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
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
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                         <div class="col-md-12">
                             <img src="<?php echo e(asset('assets/images/no-record.png')); ?>" alt="">
                         </div>
                         <?php endif; ?>

                     </div>
                     <!--pagination-->
                     <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                         <nav aria-label="Page navigation example">
                             <?php echo e($products->links()); ?>

                         </nav>
                     </div>
                 </div>
                 <div class="col-lg-3 primary-sidebar sticky-sidebar" wire:ignore>
                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.categories','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <!-- Fillter By Price -->

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.priceslider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('priceslider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


                     <!-- Product sidebar Widget -->
                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product_sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product_sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner_sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('banner_sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 </div>
             </div>
         </div>
     </section>
 </main>
 <?php $__env->startPush('scripts'); ?>
 <script>
     var slider = document.getElementById('slider');
     noUiSlider.create(slider, {
         start: [0, 10000],
         connect: true,
         range: {
             'min': 10,
             'max': 10000
         },
         pips: {
             mode: 'steps',
             stepped: true,
             density: 1
         }
     });
     slider.noUiSlider.on('update', function(value) {
         window.livewire.find('<?php echo e($_instance->id); ?>').set('min_price', value[0]);
         window.livewire.find('<?php echo e($_instance->id); ?>').set('max_price', value[1]);
     });
 </script>
 <?php $__env->stopPush(); ?>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/sale-component.blade.php ENDPATH**/ ?>