<div class="main-content" wire:ignore>
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Add New Subscribe Mail Message</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{ route('admin.dashboard') }}">
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
            <div class="card">
                <div class="card-header">
                    <h4>Admin</h4>
                    <p class="card-desc">Add New Subscribe Mail Message</p>
                </div>
                <div class="card-body">
                    <form class="separate-form" wire:submit.prevent="addMail">
                        <x-subscribe_mail_form />
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="ad-footer-btm">
        <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
    </div>
</div>
