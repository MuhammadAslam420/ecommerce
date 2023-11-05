     <div class="header-action-icon-2">
                           <?php if(Cart::instance('compare')->count() > 0): ?>
                            <a href="/compare">
                                <img class="svgInject" alt="Evara" src="<?php echo e(asset('assets/images/shuffle.png')); ?>">
                                <span class="pro-count blue"><?php echo e(Cart::instance('compare')->count()); ?></span>
                            </a>
                            <?php else: ?>
                            <a href="#">
                                <img class="svgInject" alt="Evara" src="<?php echo e(asset('assets/images/shuffle.png')); ?>">
                                <span class="pro-count blue">0</span>
                            </a>
                            <?php endif; ?>
    </div><?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/28029d2da51956e92dcbd000901f4a7eb884e6a9.blade.php ENDPATH**/ ?>