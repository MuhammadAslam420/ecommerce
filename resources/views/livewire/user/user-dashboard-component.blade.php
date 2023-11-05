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
     <section class="pt-150 pb-150">
         <div class="container">
             <div class="row">
                 <div class="col-lg-10 m-auto">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="dashboard-menu">
                                 <ul class="nav flex-column" role="tablist" wire:ignore>
                                     <li class="nav-item">
                                         <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fa fa-tachometer mr-10"></i>Dashboard</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fa fa-shopping-bag mr-10"></i>Orders</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fa fa-check mr-10"></i>Track Your Order</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fa fa-map-marker mr-10"></i>My Address</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fa fa-user mr-10"></i>Account details</a>
                                     </li>
                                     <!-- <li class="nav-item">
                                         <a class="nav-link" href="page-login-register.html"><i class="fa fa-sign-out mr-10"></i>Logout</a>
                                     </li> -->
                                 </ul>
                             </div>
                         </div>
                         <div class="col-md-8">
                             @if(Session::has('status'))
                             <div class="alert alert-success text-dark">{{Session::get('status')}}</div>
                             @endif
                             <div class="tab-content dashboard-content" wire:ignore.self>
                                 <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                     <div class="card">
                                         <div class="card-header">
                                             <h5 class="mb-0">Hello {{Auth::user()->name}}! </h5>
                                         </div>
                                         <div class="card-body">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="card">
                                                         <div class="card-header bg-dark">
                                                             <div class="card-title">
                                                                 <h4 class="text-light">Total Purchase Cost</h4>
                                                             </div>
                                                         </div>
                                                         <div class="card-body">
                                                             <div class="card-title">
                                                                 <p>${{$cost}}</p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="card">
                                                         <div class="card-header bg-dark">
                                                             <div class="card-title">
                                                                 <h4 class="text-light">Total No's Of Orders</h4>
                                                             </div>
                                                         </div>
                                                         <div class="card-body">
                                                             <div class="card-title">
                                                                 <p>${{$totalorders}}</p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="card">
                                                         <div class="card-header bg-dark">
                                                             <div class="card-title">
                                                                 <h4 class="text-light">Today Purchase Cost</h4>
                                                             </div>
                                                         </div>
                                                         <div class="card-body">
                                                             <div class="card-title">
                                                                 <p>${{$today_cost}}</p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="card">
                                                         <div class="card-header bg-dark">
                                                             <div class="card-title">
                                                                 <h4 class="text-light">Today No's Of Orders</h4>
                                                             </div>
                                                         </div>
                                                         <div class="card-body">
                                                             <div class="card-title">
                                                                 <p>${{$today_orders}}</p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                     <div class="card">
                                         <div class="card-header">
                                             <h5 class="mb-0">Your Orders</h5>
                                         </div>
                                         <div class="card-body">
                                             <div class="table-responsive">
                                                 <table class="table">
                                                     <thead>
                                                         <tr>
                                                             <th>Order</th>
                                                             <th>Date</th>
                                                             <th>Status</th>
                                                             <th>Total</th>
                                                             <th>Actions</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         @foreach($orders as $order)
                                                         <tr>
                                                             <td>#{{$order->id}}</td>
                                                             <td>{{$order->created_at}}</td>
                                                             <td>{{$order->status}}</td>
                                                             <td>${{$order->total}} for 2 item</td>
                                                             <td><a href="{{route('user_order.detail',['id'=>$order->id])}}" class="btn btn-small d-block">View</a></td>
                                                         </tr>
                                                         @endforeach

                                                     </tbody>
                                                 </table>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab" wire:ignore.self>
                                     <div class="card">
                                         <div class="card-header">
                                             <h5 class="mb-0">Orders tracking</h5>
                                         </div>
                                         <div class="card-body contact-from-area">
                                             <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                             <div class="row">
                                                 <div class="col-lg-8">
                                                     <form class="contact-form-style mt-30 mb-50" wire:submit.prevent="trackOrder">
                                                         <div class="input-style mb-20">
                                                             <label>Order ID</label>
                                                             <input name="order_id" placeholder="Found in your order confirmation email" type="text" class="square" wire:model="order_id">
                                                             @error('order_id') <span class="text-danger">{{$message}}</span>@enderror
                                                         </div>
                                                         <div class="input-style mb-20">
                                                             <label>Billing email</label>
                                                             <input name="email" placeholder="Email you used during checkout" type="email" class="square" wire:model="email">
                                                             @error('email') <span class="text-danger">{{$message}}</span>@enderror
                                                         </div>
                                                         <button class="submit submit-auto-width" type="submit">Track</button>
                                                     </form>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <div class="card mb-3 mb-lg-0">
                                                 <div class="card-header">
                                                     <h5 class="mb-0">Billing Address</h5>
                                                 </div>
                                                 <div class="card-body">
                                                     <address>{{Auth::user()->billing_address}}</address>
                                                     <a href="{{route('edit.profile')}}" class="btn-small">Edit</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-lg-6">
                                             <div class="card">
                                                 <div class="card-header">
                                                     <h5 class="mb-0">Shipping Address</h5>
                                                 </div>
                                                 <div class="card-body">
                                                     <address>{{Auth::user()->shipping_address}}</address>
                                                     <a href="{{route('edit.profile')}}" class="btn-small">Edit</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                     <div class="card">
                                         <div class="card-header">
                                             <div class="row">
                                                 <div class="col-6">
                                                     <h5>Account Details</h5>
                                                 </div>
                                                 <div class="col-6">
                                                     <a href="{{route('edit.profile')}}" class="btn btn-info pull-right">Update Profile</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="card-body">
                                             <table class="table">
                                                 <tr>
                                                     <td>Customer Name</td>
                                                     <td>{{Auth::user()->name}}</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Email</td>
                                                     <td>{{Auth::user()->email}}</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Customer Mobile</td>
                                                     <td>{{Auth::user()->mobile}}</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Customer Billing Address</td>
                                                     <td>{{Auth::user()->billing_address}}</td>
                                                 </tr>
                                                 <tr>
                                                     <td>Customer Shipping Address</td>
                                                     <td>{{Auth::user()->shipping_address}}</td>
                                                 </tr>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
