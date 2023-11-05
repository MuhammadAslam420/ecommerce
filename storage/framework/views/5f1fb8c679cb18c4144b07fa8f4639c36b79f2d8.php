             <?php
              $categories=DB::table("categories")->get();
              ?>
              <div class="search-style-2">
                    <form  method="get" action="<?php echo e(route('search')); ?>">
                        <select class="select-active" name="category_id" wire:model="category_id">
                            <option>All Categories</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <input type="search" name="search" placeholder="Search for items..." wire:model="search">
                        <button type="submit"><i class="fa fa-search"></i></button>

                    </form>
                </div><?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/6b86443e4d206185899027db6fc14489e5c0efb9.blade.php ENDPATH**/ ?>