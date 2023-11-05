          <section class="newsletter p-30 text-white wow fadeIn animated">
             <div class="container">
               <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
             <div class="row align-items-center">
                 <div class="col flex-horizontal-center">
                     <img class="icon-email" src="<?php echo e(asset('assets/images/icon-email.svg')); ?>" alt="">
                     <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                 </div>
                 <div class="col my-4 my-md-0 des">
                     <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>Up comming pormotions.</strong></h5>
                 </div>
             </div>
         </div>
         <div class="col-lg-5">
             <!-- Subscribe Form -->
             <form class="form-subcriber d-flex wow fadeIn animated" wire:submit.prevent="sendMail">
                 <input type="email" class="form-control bg-white font-small" placeholder="Enter your email" wire:model="email">
                 <button class="btn bg-dark text-white" type="submit">Subscribe</button>
             </form>
             <!-- End Subscribe Form -->
         </div>
                </div>
            </div>
        </section>
<?php /**PATH D:\Personal Code\ecommerce universe\latest-ecommerce-laravel-9\storage\framework\views/4e89918d70c8c33105fdc224a3c1e5389aee27a1.blade.php ENDPATH**/ ?>