<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Banner</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-list">
                            <a href="{{ route('admin.banners') }}">All Banners</a>
                        </li>
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
    @if(Session::has('msg'))
    <div class="alert alert-success">{{Session::get('msg')}}</div>
    @elseif(Session::has('err'))
    <div class="alert alert-danger">{{Session::get('err')}}</div>
    @endif
    <div class="from-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin</h4>
                        <p class="card-desc">Edit  Banner</p>
                    </div>
                    <div class="card-body">
                        <form class="separate-form" enctype="multipart/form-data" wire:submit.prevent="addBanner">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Banner Info</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Banner Title</label>
                                            <input class="form-control" type="text" placeholder="Enter Title" name="title" wire:model="title">
                                            @error('title') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Sub-Title</label>
                                            <input class="form-control" type="text" placeholder="SubTitle" name="subtitle" wire:model="subtitle">
                                            @error('subtitle') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Link</label>
                                            <input class="form-control" type="text" placeholder="banner Link" name="link" wire:model="link">
                                            @error('link') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Banner Position</label>
                                              <select name="position" id="position" class="form-control" wire:model="position">
                                                <option value="" Selected>Select Position</option>
                                                <option value="0">Main Home Slider</option>
                                                <option value="1">Slider Right Banner Top</option>
                                                <option value="1">Slider Right Banner Bottom</option>
                                                <option value="2">Home Page Category Banner</option>
                                                <option value="3">3 Banners</option>
                                                <option value="4">Monthly Best Sale Banner</option>
                                                <option value="5">Blog right First Banner</option>
                                                <option value="6">Blog Right Second Banners</option>
                                                <option value="7">After Blog Banner</option>
                                                <option value="8">Home Page Last Banner</option>
                                                <option value="9">Shop Sidebar Banner</option>
                                                <option value="10">Other Pages footer Banner </option>
                                              </select>
                                               @error('position') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Sub-Title</label>
                                            <select name="status" id="status" class="form-control" wire:model="status">
                                                <option value="" selected>Select Status</option>
                                                <option value="active">Active</option>
                                                <option value="de-active">In-Active</option>
                                            </select>
                                            @error('status') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Banner Image</label>
                                            <input type="file" class="form-control" name="new_image" wire:model="new_image" />
                                            @error('new_image') <span class="text-danger">{{$message}}</span>@enderror


                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div wire:loading wire:target="new_image" wire:key="new_image"><i class="fa fa-spinner fa-spin mt-2 ml-2"></i> Uploading</div>


                                        {{-- ImagePreview --}}
                                        @if($new_image)
                                        <img src="{{$new_image->temporaryurl()}}" width="120" alt="">
                                        @else
                                        <img src="{{asset('assets/images')}}/{{ $image }} " width="120" alt="">
                                        @endif


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
