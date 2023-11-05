 <main class="main" wire:ignore>
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <i class="fa fa-arrow-right"></i> Pages
                 <i class="fa fa-arrow-right"></i> <?php echo e($page->title); ?>

             </div>
         </div>
     </div>
     <section class="mt-50 mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                    <?php echo $page->conetnt; ?>

                 </div>

             </div>
         </div>
     </section>
 </main>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\resources\views/livewire/privacy-policy-component.blade.php ENDPATH**/ ?>