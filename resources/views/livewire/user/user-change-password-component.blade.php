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
         @if(Session::has('success'))
         <div class="alert alert-success text-dark">{{Session::get('success')}}</div>
         @elseif(Session::has('fail'))
         <div class="alert alert-success text-dark">{{Session::get('fail')}}</div>
         @endif
         <div class="container">
             <div class="card">
                 <div class="card-header">
                     <div class="card-title">
                         <h4>Change Password</h4>
                     </div>
                     <div class="card-body">
                         <form wire:submit.prevent="changePassword">
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label for="name" class="label-control">Enter Current Password</label>
                                         <input type="text" name="current_password" id="current_password" placeholder="Customer current password" class="form-control" wire:model="current_password">
                                         @error('current_password') <span>{{$message}}</span>@enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="email" class="label-control">New Password</label>
                                         <input type="password" name="password" id="password" placeholder="Customer password" class="form-control" wire:model="password">
                                         @error('password') <span>{{$message}}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="mobile" class="label-control">Password Confirmation</label>
                                         <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Customer password_confirmation" class="form-control" wire:model="password_confirmation">
                                         @error('password_confirmation') <span>{{$message}}</span>@enderror
                                     </div>
                                 </div>

                             </div>

                             <div class="row">
                                 <div class="form-group ">
                                     <button type="submit" class="btn btn-danger pull-right">Update Password</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
