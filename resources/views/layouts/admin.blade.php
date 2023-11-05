<!DOCTYPE html>

<html lang="zxx">


<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/icofont.min.css') }}">

    <!--Page Specific -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/nice-select.css') }}">
    <!--Custom Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css"
        integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    @stack('styles')
    @livewireStyles
</head>


<body>
    {{-- <div class="loader">
        <div class="spinner">
            <img src="{{asset('admin/assets/images/loader.gif')}}" alt="" />
        </div>
    </div> --}}
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Header Start -->
        <header class="header-wrapper main-header">
            <div class="header-inner-wrapper">
                <div class="header-right">

                    <div class="header-left">
                        <div class="header-links">
                            <a href="javascript:void(0);" class="toggle-btn">
                                <span></span>
                            </a>
                        </div>

                    </div>
                    <div class="header-controls">
                        <livewire:order-notifications />
                        <livewire:message-notifications />
                        <div class="user-info-wrapper header-links">
                            <a href="javascript:void(0);" class="user-info">
                                <img src="{{ asset('admin/assets/images') }}/{{ Auth::user()->profile_photo_path }}"
                                    alt="" class="user-img">
                                <div class="blink-animation">
                                    <span class="blink-circle"></span>
                                    <span class="main-circle"></span>
                                </div>
                            </a>
                            <div class="user-info-box">
                                <div class="drop-down-header">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->utype }}</p>
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.profile_setting') }}">
                                            <i class="fa fa-edit"></i> Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.profile_setting') }}">
                                            <i class="fa fa-lock"></i> Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                class="fa fa-sign-out mr-10"></i>Logout</a>
                                    </li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sidebar Start -->
        <x-aside />
        <!-- Container Start -->
        <div class="page-wrapper">

            {{ $slot }}
        </div>
    </div>

    <audio id="notification-sound" src="{{asset('admin/assets/sounds/notification.mp3')}}" preload="auto"></audio>


    <!-- Script Start -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/swiper.min.js') }}"></script>
    <!-- Page Specific -->
    <script src="{{ asset('admin/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    @stack('scripts')
    <x-livewire-alert::scripts />

</body>

</html>
