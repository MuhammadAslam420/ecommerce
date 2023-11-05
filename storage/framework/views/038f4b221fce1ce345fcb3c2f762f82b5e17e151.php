              <?php
              $categories=DB::table("categories")->inRandomOrder()->limit(10)->get();
              ?>
               <div class="main-categori-wrap d-none d-lg-block">
                    <a class="categori-button-active" href="#">
                        <span class="fa fa-th"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-large">
                        <ul>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li >
                                <a href="<?php echo e(route('category',['slug'=>$category->slug])); ?>"><img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($category->logo); ?>" style="width:24px; border-radius:91px; border:1px solid green; margin-right:5px;"><?php echo e($category->name); ?></a>

                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </ul>
                    </div>
                </div>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/fe40179f4964a2088405165af45094875ea09762.blade.php ENDPATH**/ ?>