<main class="main single-page" wire:ignore>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <i class="fa fa-arrow-right"></i> Pages
                <i class="fa fa-arrow-right"></i> <?php echo e($page->title); ?> us
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container pt-25">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                   <?php echo $page->conetnt; ?>

                </div>
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('assets/images/about-1.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="pt-25 wow fadeIn animated">
        <div class="container">
            <div class="row mb-50 align-items-center">
                <div class="col-md-12">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Team</h6>
                    <h2 class="mb-15 wow fadeIn animated">Top team of experts</h2>
                    <p class="text-grey-3 wow fadeIn animated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione optio perferendis sequi mollitia quis autem ea cupiditate possimus!</p>
                </div>

            </div>
            <div class="position-relative">
                <div class="row wow fadeIn animated">
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-card border-radius-10 overflow-hidden text-center">
                            <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($team->image); ?>" alt="" class="border-radius-10 mb-30 hover-up">
                            <h4 class="fw-500 mb-0"><?php echo e($team->name); ?></h4>
                            <p class="fw-400 text-brand mb-10"><?php echo e($team->position); ?></p>
                            <div class="social-icons single-share mt-5">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Follow On:</strong></li>
                                    <li class="social-facebook"><a href="<?php echo e($team->fb); ?>"><img src="<?php echo e(asset('assets/images/icon-facebook.svg')); ?>" alt=""></a></li>
                                    <li class="social-twitter"> <a href="<?php echo e($team->tw); ?>"><img src="<?php echo e(asset('assets/images/icon-twitter.svg')); ?>" alt=""></a></li>
                                    <li class="social-instagram"><a href="<?php echo e($team->insta); ?>"><img src="<?php echo e(asset('assets/images/icon-instagram.svg')); ?>" alt=""></a></li>
                                    <li class="social-linkedin"><a href="<?php echo e($team->pin); ?>"><img src="<?php echo e(asset('assets/images/icon-pinterest.svg')); ?>" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!--col-->
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section-padding">
        <div class="container pt-25">
            <div class="row mb-50">
                <div class="col-lg-12 col-md-12 text-center">
                    <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
                    <h2 class="mb-15 text-grey-1 wow fadeIn animated">Take a look what<br> our clients say about us</h2>
                    <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                </div>
            </div>
            <div class="row align-items-center">
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                        <div class="hero-card-icon icon-left-2 hover-up ">
                            <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="<?php echo e(asset('assets/images/avatar-1.jpg')); ?>" style="height:120px;" alt="">
                        </div>
                        <div class="pl-30">
                            <h5 class="mb-5 fw-500">
                                <?php echo e($review->user->name); ?>

                            </h5>
                            <p class="font-sm text-grey-5"><?php echo e($review->product->name); ?></p>
                            <p class="text-grey-3"><?php echo e($review->comment); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>
    <section class="section-padding">
        <div class="container pb-25">
            <h3 class="section-title mb-20 wow fadeIn animated text-center"><span>Featured</span> Clients</h3>
            <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="brand-logo">
                        <img class="img-grey-hover" src="<?php echo e(asset('assets/images')); ?>/<?php echo e($brand->logo); ?>" alt="">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
</main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/about-component.blade.php ENDPATH**/ ?>