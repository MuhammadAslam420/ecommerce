<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Add New Product Attribute</h4>
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
    <!-- From Start -->
    <div class="from-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin</h4>
                        <p class="card-desc">Add New Product Attribute</p>
                    </div>
                    <div class="card-body">
                        <form class="separate-form" enctype="multipart/form-data" wire:submit.prevent="addAttribute">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Attribute Info</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Select Product</label>
                                            <select name="product_id" id="product_id" class="form-control" wire:model="product_id">
                                                <option value="" selected>Select Product</option>
                                                @foreach($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                                </select>
                                                @error('product_id') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Category Slug(auto Generate)</label>
                                            <select name="size" id="size" class="form-control" wire:model="size">
                                                <option value="" selected>Select Size</option>
                                                <option value="S">Small</option>
                                                <option value="M">Medium</option>
                                                <option value="L">Large</option>
                                                <option value="XL">Extra Large</option>
                                                <option value="XXL">Extra Extra Large</option>
                                                </select>
                                                @error('size') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Category Logo</label>
                                            <input type="text" class="form-control" placeholder="black, white, yellow...." name="color" wire:model="color" />
                                            @error('color') <span class="text-danger">{{$message}}</span>@enderror


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
