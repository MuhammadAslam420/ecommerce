<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">{{ $name }}'s Profile</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{ route('admin.users') }}"><i class="fa fa-users mr-2"></i>Customers</a>
                        </li>
                        <li class="breadcrumb-link active">{{$name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products view Start -->
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <grammarly-extension data-grammarly-shadow-root="true"
                    style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT">
                </grammarly-extension>
                <div class="card-header">
                    <h4 class="card-title mb-0">Authentication</h4>
                    <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                            data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                            data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">

                    <div class="profile-title">
                        <div class="media ad-profile2-img">
                            <img alt="{{ $name }}" src="{{ asset($nprofileimage) }}">
                            <div class="media-body">
                                <h5 class="mb-1">{{ $name }}</h5>
                                <p>{{ $utype }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>Reset Password</p>
                    <hr>
                    <form wire:submit.prevent="changePassword">
                        <div class="form-group">
                            <input type="password" name="current_password" placeholder="Current Password" id="current_password" class="form-control" wire:model="current_password">
                            @error('current_password') <span>{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="New Password" id="password" class="form-control" wire:model="password">
                            @error('password') <span>{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Customer password_confirmation" class="form-control" wire:model="password_confirmation">
                            @error('password_confirmation') <span>{{$message}}</span>@enderror                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary squer-btn">Update Password</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <form class="card" enctype="multipart/form-data" wire:submit.prevent="updateProfile">
                <div class="card-header">
                    <h4 class="card-title mb-0">Edit Profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="javascript:;"
                            data-bs-toggle="card-collapse" data-bs-original-title="" title=""><i
                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="javascript:;"
                            data-bs-toggle="card-remove" data-bs-original-title="" title=""><i
                                class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text"name="name" wire:model="name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input class="form-control" type="email" name="email" wire:model="email">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Mobile</label>
                                <input class="form-control" type="text" name="mobile" wire:model="mobile">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" wire:model="address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="nprofile" id="nprofile" class="form-control"
                                wire:model="nprofile">
                                @if($nprofile)
                                    <img src="{{$nprofile->temporaryurl()}}" width="120">
                                @endif
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary squer-btn" type="submit" data-bs-original-title=""
                        title="">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
    <div class="ad-footer-btm">
        <p>Copyright 2023 © MA All Rights Reserved.</p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('livewire:load', function () {
            Livewire.on('clear-file-input', function () {
                clearFileInput();
            });
        });
        function clearFileInput() {
            const fileInput = document.getElementById('nprofile');
            fileInput.value = null;
        }
    });
</script>