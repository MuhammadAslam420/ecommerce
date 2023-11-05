    <main class="main" wire:ignore>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <i class="fa fa-arrow-right"></i> Blog
                    <i class="fa fa-arrow-right"></i> Technology
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50 text-center">
                            <h1 class="font-xxl text-brand">Our Blog</h1>
                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                <span class="post-by"><?php echo e($categories); ?> Categories</span>
                                <span class="post-on has-dot"><?php echo e($blogs->count()); ?> Blog</span>
                                <span class="time-reading has-dot">3azone Author</span>
                                <span class="hit-count  has-dot"><?php echo e($views); ?> Views</span>
                            </div>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>">
                                                <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($blog->image); ?>" alt="<?php echo e($blog->title); ?>">
                                            </a>
                                            <div class="entry-meta">
                                                <a class="entry-meta meta-2" href="<?php echo e(route('category',['slug'=>$blog->category->slug])); ?>">Sport</a>
                                            </div>
                                        </div>
                                        <div class="entry-content-2">
                                            <h3 class="post-title mb-15">
                                                <a href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>"><?php echo e($blog->title); ?></a>
                                            </h3>
                                            <p class="post-exerpt mb-30"><?php echo Str::limit($blog->description,30); ?></p>
                                            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                <div>
                                                    <span class="post-on"> <i class="fa fa-calendar"></i> <?php echo e(\Carbon\Carbon::parse($blog->created_at)->isoFormat('MM Do YYYY')); ?></span>
                                                    <span class="hit-count has-dot"><?php echo e($blog->views); ?> Views</span>
                                                </div>
                                                <a href="<?php echo e(route('blog-detail',['slug'=>$blog->slug])); ?>" class="text-brand">Read more <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!--post-grid-->
                        <div class="pagination-area mt-15 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <?php echo e($blogs->links('pagination::bootstrap-4')); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/blog-component.blade.php ENDPATH**/ ?>