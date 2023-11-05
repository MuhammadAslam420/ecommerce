 <footer class="main">
    @livewire("email-subscription-component")
    @if($setting)
     <section class="section-padding footer-mid" style="background: #131a22;">
         <div class="container pt-15 pb-20">
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <div class="widget-about font-md mb-md-5 mb-lg-0">
                         <div class="logo logo-width-1 wow fadeIn animated">
                             <a href="/"><img src="{{asset('assets/images')}}/{{$setting->footer_logo}}" alt="logo"></a>
                         </div>
                         <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                         <p class="wow fadeIn animated">
                             <strong>Address: </strong>{{$setting->address}}
                         </p>
                         <p class="wow fadeIn animated">
                             <strong>Phone: </strong>{{$setting->hotline}}
                         </p>
                         <p class="wow fadeIn animated">
                             <strong>Hours: </strong>{{$setting->timing}}
                         </p>
                         <div class="social-icons single-share mt-5">
                            <ul class="text-grey-5 d-inline-block">
                                <li><strong class="mr-10">Follow Us:</strong></li>
                                <li class="social-facebook"><a href="{{$setting->facebook}}"><img src="{{asset('assets/images/icon-facebook.svg')}}" alt=""></a></li>
                                <li class="social-twitter"> <a href="{{$setting->twitter}}"><img src="{{asset('assets/images/icon-twitter.svg')}}" alt=""></a></li>
                                <li class="social-instagram"><a href="{{$setting->instagram}}"><img src="{{asset('assets/images/icon-instagram.svg')}}" alt=""></a></li>
                                <li class="social-linkedin"><a href="{{$setting->pinterest}}"><img src="{{asset('assets/images/icon-pinterest.svg')}}" alt=""></a></li>
                            </ul>
                        </div>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-3">
                     <h5 class="widget-title wow fadeIn animated">About</h5>
                     <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                         <li><a href="/about">About Us</a></li>
                         <li><a href="/contact">Contact Us</a></li>
                         <li><a href="/privacy-policy">Privacy Policy</a></li>
                         <li><a href="/purchase-guide">Privacy Guide</a></li>
                         <li><a href="/terms-condition">Terms &amp; Conditions</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-2  col-md-3">
                     <h5 class="widget-title wow fadeIn animated">My Account</h5>
                     <ul class="footer-list wow fadeIn animated">
                         <li><a href="{{route('login')}}">Sign In</a></li>
                         <li><a href="/cart">View Cart</a></li>
                         <li><a href="/wishlist">My Wishlist</a></li>
                         <li><a href="/user/my/orders">My Orders</a></li>
                         <li><a href="/prurchase-guide">Help</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-4">
                     <h5 class="widget-title wow fadeIn animated">Install App</h5>
                     <div class="row">
                         <div class="col-md-8 col-lg-12">
                             <p class="wow fadeIn animated">From App Store or Google Play</p>
                             <div class="download-app wow fadeIn animated">
                                 <a href="{{$setting->ios_app}}" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('assets/images/app-store.jpg')}}" alt=""></a>
                                 <a href="{{$setting->android_app}}" class="hover-up"><img src="{{asset('assets/images/google-play.jpg')}}" alt=""></a>
                             </div>
                         </div>
                         <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                             <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                             <img class="wow fadeIn animated" src="{{asset('assets/images/payment-method.png')}}" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     @else
     <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="/"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>562 Wellington Road, Street 32, San Francisco
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="{{asset('assets/images/icon-facebook.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/images/icon-twitter.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/images/icon-instagram.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/images/icon-pinterest.svg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('assets/images/icon-youtube.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/purchase-guide">Privacy Guide</a></li>
                        <li><a href="/terms-condition">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="{{route('login')}}">Sign In</a></li>
                        <li><a href="/cart">View Cart</a></li>
                        <li><a href="/wishlist">My Wishlist</a></li>
                        <li><a href="/user/my/orders">My Orders</a></li>
                        <li><a href="/prurchase-guide">Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('assets/images/app-store.jpg')}}" alt=""></a>
                                <a href="#" class="hover-up"><img src="{{asset('assets/images/google-play.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="{{asset('assets/images/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif
 </footer>
