     <div class="header-action-icon-2">
                           <?php if(Cart::instance('wishlist')->count() > 0): ?>
                            <a href="/wishlist">
                                <img class="svgInject" alt="Evara" src="<?php echo e(asset('assets/images/icon-heart.svg')); ?>">
                                <span class="pro-count blue"><?php echo e(Cart::instance('wishlist')->count()); ?></span>
                            </a>
                            <?php else: ?>
                            <a href="#">
                                <img class="svgInject" alt="Evara" src="<?php echo e(asset('assets/images/icon-heart.svg')); ?>">
                                <span class="pro-count blue">0</span>
                            </a>
                            <?php endif; ?>
    </div><?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/393f0bd8eb4bffc15d4a7f7788b3608aaab9f608.blade.php ENDPATH**/ ?>