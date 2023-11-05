<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Edit {{ $name }} Coupon</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{route('admin.dashboard')}}">
                                <span class="icon-menu feather-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-link active">Basic Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="from-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin</h4>
                        <p class="card-desc"><a href="{{ route('admin.coupons') }}" class="btn btn-success">Back To Coupons</a></p>
                    </div>
                    <div class="card-body">
                        <form class="separate-form" enctype="multipart/form-data" wire:submit.prevent="editCoupon">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Coupon {{ $name }} Info</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Code Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Category Name" name="name" wire:model="name">
                                            @error('name') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Coupon Value</label>
                                            <input class="form-control" type="text" placeholder="0.0" name="coupon_value" wire:model="coupon_value">
                                            @error('coupon_value') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Cart Value</label>
                                            <input type="text" class="form-control" name="cart_value" wire:model="cart_value" />
                                            @error('cart_value') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                      <div class="form-group">
                                        <label for="status" class="label-control">Coupon Type</label>
                                        <select name="type" id="type" class="form-control" wire:model="type">
                                            <option value="" selected>Select Type</option>
                                            <option value="fixed">Fixed</option>
                                            <option value="percentage">Percentage</option>
                                        </select>
                                        @error('type') <span class="text-danger">{{$message}}</span>@enderror
                                      </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                          <label for="status" class="label-control">Status</label>
                                          <select name="status" id="status" class="form-control" wire:model="status">
                                              <option value="" selected>Select status</option>
                                              <option value="1">Active</option>
                                              <option value="0">In-Active</option>
                                          </select>
                                          @error('status') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                      </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                          <label for="status" class="label-control">Send Date of Coupon</label>
                                          <input type="date" name="end" id="end" class="form-control" wire:model="end">
                                          @error('end') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                      </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="ad-footer-btm">
        <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
    </div>
</div>
