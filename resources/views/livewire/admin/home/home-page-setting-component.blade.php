<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Website & Mobile View General Setting</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{route('admin.dashboard')}}">
                                <span class="icon-menu feather-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
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
                        <p class="card-desc">General Settings</p>
                    </div>
                    <div class="card-body">
                        <form class="separate-form"  wire:submit.prevent="updateSetting">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Home Page Setting Info</h5>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Website & Application Name</label>
                                            <input type="text" name="name" id="name" class="form-control" wire:model="name">
                                            @error('name') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Email Address</label>
                                            <input type="text" class="form-control input-md" name="email" wire:model="email">
                                            @error('email') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">HoteLine Contact</label>
                                            <input type="text" class="form-control input-md" name="hotline" wire:model="hotline">
                                            @error('hotline') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Mobile Contact</label>
                                            <input type="text" class="form-control input-md" name="mobile" wire:model="mobile">
                                            @error('mobile') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Office / Shop Address</label>
                                            <input type="text" class="form-control input-md" name="address" wire:model="address">
                                            @error('address') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Map</label>
                                            <input type="text" class="form-control input-md" name="map" wire:model="map">
                                            @error('map') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Facebook</label>
                                            <input type="text" class="form-control input-md" name="facebook" wire:model="facebook">
                                            @error('facebook') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Youtube</label>
                                            <input type="text" class="form-control input-md" name="youtube" wire:model="youtube">
                                            @error('youtube') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Apple Store</label>
                                            <input type="text" class="form-control input-md" name="app_store" wire:model="app_store">
                                            @error('app_store') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Play Store</label>
                                            <input type="text" class="form-control input-md" name="play_store" wire:model="play_store">
                                            @error('play_store') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Instagram</label>
                                            <input type="text" class="form-control input-md" name="instagram" wire:model="instagram">
                                            @error('instagram') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Twitter</label>
                                            <input type="text" class="form-control input-md" name="twitter" wire:model="twitter">
                                            @error('twitter') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Pinterest</label>
                                            <input type="text" class="form-control input-md" name="pinterest" wire:model="pinterest">
                                            @error('pinterest') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Web Logo</label>
                                            <input type="file" class="form-control input-md" name="n_web_logo" wire:model="n_web_logo">

                                        </div>
                                        @if($n_web_logo)
                                        <img src="{{ $n_web_logo->temporaryurl() }}" width="120" alt="">
                                        @else
                                        <img src="{{ asset('assets/images') }}/{{ $web_logo }}" width="120" alt="">
                                        @endif
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Mobile Logo</label>
                                            <input type="file" class="form-control input-md" name="n_mobile_logo" wire:model="n_mobile_logo">

                                        </div>
                                        @if($n_mobile_logo)
                                        <img src="{{ $n_mobile_logo->temporaryurl() }}" width="120" alt="">
                                        @else
                                        <img src="{{ asset('assets/images') }}/{{ $mobile_logo }}" width="120" alt="">
                                        @endif
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Web Footer Logo</label>
                                            <input type="file" class="form-control input-md" name="n_footer_logo" wire:model="n_footer_logo">

                                        </div>
                                        @if($n_footer_logo)
                                        <img src="{{ $n_footer_logo->temporaryurl() }}" width="120" alt="">
                                        @else
                                        <img src="{{ asset('assets/images') }}/{{ $footer_logo }}" width="120" alt="">
                                        @endif
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Mobile Footer Logo</label>
                                            <input type="file" class="form-control input-md" name="n_m_footer_logo" wire:model="n_m_footer_logo">

                                        </div>
                                        @if($n_m_footer_logo)
                                        <img src="{{ $n_m_footer_logo->temporaryurl() }}" width="120" alt="">
                                        @else
                                        <img src="{{ asset('assets/images') }}/{{ $m_footer_logo }}" width="120" alt="">
                                        @endif
                                    </div>



                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Update</button>

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
