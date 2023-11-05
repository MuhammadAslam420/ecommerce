<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
    .social-btn-sp #social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    .social-btn-sp #social-links ul li {
        display: inline-block;
    }
    .social-btn-sp #social-links ul li a {
        padding: 5px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 15px;
    }
    table #social-links{
        display: inline-table;
    }
    table #social-links ul li{
        display: inline;
    }
    table #social-links ul li a{
        padding: 5px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 15px;
        background: #e3e3ea;
    }
</style>
<?php $__env->stopPush(); ?>
  <main class="main" wire:ignore>
      <div class="page-header breadcrumb-wrap">
          <div class="container">
              <div class="breadcrumb">
                  <a href="/" rel="nofollow">Home</a>
                  <i class="fa fa-arrow-right"></i> Blog
                  <i class="fa fa-arrow-right"></i> <?php echo e($blog->category->name); ?>

              </div>
          </div>
      </div>
      <section class="mt-50 mb-50">
          <div class="container custom">
              <div class="row">
                  <div class="col-lg-10 m-auto">
                      <div class="single-page pl-30">
                          <div class="single-header style-2">
                              <h1 class="mb-30"><?php echo e($blog->title); ?></h1>
                              <div class="single-header-meta">
                                  <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                      <span class="post-by">By <a href="#">3azone</a></span>
                                      <span class="post-on has-dot"><?php echo e(\Carbon\Carbon::parse($blog->created_at)->isoFormat("MMM Do YYYY")); ?></span>
                                      
                                  </div>
                                  <div class="social-icons single-share">
                                      <ul class="text-grey-5">
                                          <strong class="mr-5">Share this:</strong>
                                          <div class="social-btn-sp">
                                            <?php echo $shareButtons; ?>

                                           </div>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <figure class="single-thumbnail">
                              <img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($blog->image); ?>" alt="<?php echo e($blog->title); ?>">
                          </figure>
                          <div class="single-content">
                           <?php echo $blog->description; ?>

                          </div>
                          <div class="entry-bottom mt-50 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                            <p>Category Tags:</p>
                              <div class="tags w-50 w-sm-100">
                                <a href="/blog" rel="tag" class="hover-up btn btn-sm btn-rounded mr-10"><?php echo e($blog->category->name); ?></a>
                              </div>
                              <div class="social-icons single-share">
                                  <ul class="text-grey-5">
                                      <strong class="mr-5">Share this:</strong>
                                      <div class="social-btn-sp">
                                        <?php echo $shareButtons; ?>

                                       </div>
                                  </ul>
                              </div>
                          </div>
                          <div class="comments-area">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <h4 class="mb-30">Comments</h4>
                                      <div class="comment-list">
                                        <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <div class="single-comment justify-content-between d-flex">
                                              <div class="user justify-content-between d-flex">
                                                  <div class="thumb text-center">
                                                      <img src="<?php echo e(asset('assets/images/avatar-3.jpg')); ?>" alt="">
                                                      <h6><a href="#"><?php echo e($comment->name); ?></a></h6>
                                                      <p class="font-xxs">
                                                        <span class="post-on has-dot"><?php echo e(\Carbon\Carbon::parse($comment->created_at)->isoFormat("MMM Do YYYY")); ?></span>
                                                      </p>
                                                  </div>
                                                  <div class="desc">
                                                      <p><?php echo e($comment->comment); ?></p>
                                                      <div class="d-flex justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                              <p class="font-xs mr-30"><?php echo e($comment->created_at); ?> </p>
                                                              
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          <!--single-comment -->
                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="comment-form">
                              <h4 class="mb-15">Leave a Comment</h4>
                              <div class="product-rate d-inline-block mb-30">
                              </div>
                              <div class="row">
                                  <div class="col-lg-8 col-md-12">
                                      <form class="form-contact comment_form" wire:submit.prevent="addComment">
                                          <div class="row">
                                              <div class="col-12">
                                                  <div class="form-group">
                                                      <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" wire:model="comment"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <input class="form-control" name="name" id="name" type="text" placeholder="Name" wire:model="name">
                                                  </div>
                                              </div>
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                      <input class="form-control" name="email" id="email" type="email" placeholder="Email" wire:model="email">
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="form-group">
                                                      <input class="form-control" name="contact" id="contact" type="text" placeholder="Website or Contact number" wire:model="contact">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="button button-contactForm">Post Comment</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/blog-detail-component.blade.php ENDPATH**/ ?>