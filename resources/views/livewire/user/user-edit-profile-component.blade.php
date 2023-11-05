 <main class="main">
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <span></span> Pages
                 <span></span> Account
             </div>
         </div>
     </div>
     <section class="pb-150">
         @if(Session::has('message'))
         <div class="alert alert-success text-dark">{{Session::get('message')}}</div>
         @endif
         <div class="container">
             <div class="card">
                 <div class="card-header">
                     <div class="card-title">
                         <h4>Edit / Update Profile</h4>
                     </div>
                     <div class="card-body">
                         <form wire:submit="editUser">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="name" class="label-control">Customer Name</label>
                                         <input type="text" name="name" id="name" placeholder="Customer Name" class="form-control" wire:model="name">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="email" class="label-control">Customer Email</label>
                                         <input type="email" name="email" id="email" placeholder="Customer Email" class="form-control" wire:model="email">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label for="mobile" class="label-control">Customer Mobile</label>
                                         <input type="text" name="mobile" id="mobile" placeholder="Customer Mobile" class="form-control" wire:model="mobile">
                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="billing_address" class="label-control">Customer Billing Address</label>
                                         <input type="text" name="billing_address" id="billing_address" placeholder="Customer billing address" class="form-control" wire:model="billing_address">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="shipping_address" class="label-control">Customer Shipping Address</label>
                                         <input type="text" name="shipping_address" id="shipping_address" placeholder="Customer shipping address" class="form-control" wire:model="shipping_address">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="form-group ">
                                     <button type="submit" class="btn btn-danger pull-right">Update Profile</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
