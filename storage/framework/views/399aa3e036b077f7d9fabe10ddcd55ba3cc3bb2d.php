
                  <div class="header-action-icon-2">
                  <?php if(Cart::instance('cart')->count() > 0): ?>
                            <a class="mini-cart-icon" href="#">
                                <img alt="Evara" src="<?php echo e(asset('assets/images/icon-cart.svg')); ?>">
                                <span class="pro-count blue"><?php echo e(Cart::instance('cart')->count()); ?></span>
                            </a>

                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                  <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="<?php echo e(route('product-detail',['slug'=>$item->model->slug])); ?>"><img alt="Evara" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($item->model->front_image); ?>"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="<?php echo e(route('product-detail',['slug'=>$item->model->slug])); ?>"><?php echo e($item->name); ?></a></h4>
                                            <h4><span><?php echo e($item->qty); ?> × </span>$<?php echo e($item->price); ?></h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#" wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$<?php echo e(Cart::total()); ?></span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="/cart" class="outline">View cart</a>
                                        <a href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            <?php else: ?>
                             <a class="mini-cart-icon" href="#">
                                <img alt="Evara" src="<?php echo e(asset('assets/images/icon-cart.svg')); ?>">
                                <span class="pro-count blue">0</span>
                            </a>
                            <?php endif; ?>

                        </div><?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/222afde4c38aea5728be7a51f086f87467f846f8.blade.php ENDPATH**/ ?>