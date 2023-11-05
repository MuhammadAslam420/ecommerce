<?php
$categories=DB::table('categories')->inRandomOrder()->limit(10)->get();
?>
<div class="widget-category mb-30">
    <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
    <ul class="categories">
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li><a href="<?php echo e(route('category',['slug'=>$category->slug])); ?>"><?php echo e($category->name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li><a href="shop-grid-right.html">Blouses & Shirts</a></li>
        <li><a href="shop-grid-right.html">Dresses</a></li>
        <li><a href="shop-grid-right.html">Swimwear</a></li>
        <li><a href="shop-grid-right.html">Beauty</a></li>
        <li><a href="shop-grid-right.html">Jewelry & Watch</a></li>
        <li><a href="shop-grid-right.html">Accessories</a></li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/components/categories.blade.php ENDPATH**/ ?>