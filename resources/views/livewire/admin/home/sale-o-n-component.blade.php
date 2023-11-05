<div class="main-content">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Sale On Timer Configure</h4>
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
                        <p class="card-desc">Sale On Timer</p>
                    </div>
                    <div class="card-body">
                        <form class="separate-form"  wire:submit.prevent="updateSale">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Home Page Categories Info</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group" wire:ignore>
                                            <label for="member-name" class="col-form-label">Status</label>
                                            <select class="form-control " name="status" wire:model="status">
                                            <option value="" Selected>Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Sale Start Date</label>
                                            <input type="text" id="start" class="form-control input-md" name="start" wire:model="start">
                                            @error('start') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-email" class="col-form-label">Sale End Date</label>
                                            <input type="text" id="end" class="form-control input-md" name="end" wire:model="end">
                                            @error('end') <span class="text-danger">{{$message}}</span>@enderror
                                        </div>
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
@push('scripts')
<script>
    $(function() {
        $('#start').datetimepicker({
                format: 'Y-MM-DD h:m:s',
            })
            .on('dp.change', function(ev) {
                var data = $('#start').val();
                @this.set('start', data);
            });
    });
    $(function() {
        $('#end').datetimepicker({
                format: 'Y-MM-DD h:m:s',
            })
            .on('dp.change', function(ev) {
                var data = $('#end').val();
                @this.set('end', data);
            });
    });
</script>
@endpush
