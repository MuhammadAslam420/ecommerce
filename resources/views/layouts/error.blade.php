<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>SplashDash</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('admin/assets/images/favicon.png')}}">
    @livewireStyles
</head>


<body>

    <!-- Main Body -->
    {{$slot}}
    <!-- Color Setting -->
    <div id="style-switcher">
        <div>
            <ul class="colors">
                <li>
                    <p class='colorchange' id='color'>
                    </p>
                </li>
                <li>
                    <p class='colorchange' id='color2'>
                    </p>
                </li>
                <li>
                    <p class='colorchange' id='color3'>
                    </p>
                </li>
                <li>
                    <p class='colorchange' id='color4'>
                    </p>
                </li>
                <li>
                    <p class='colorchange' id='color5'>
                    </p>
                </li>
                <li>
                    <p class='colorchange' id='style'>
                    </p>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="" class="settings">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- Color Setting -->
    <!-- Script Start -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    @livewireScripts
</body>

</html>
