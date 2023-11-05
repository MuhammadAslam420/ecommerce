 <aside class="sidebar-wrapper">
     <div class="logo-wrapper">
         <a href="{{ route('admin.dashboard') }}" class="admin-logo">
             <img src="{{ asset('admin/assets/images/logo.png') }}" alt="" class="sp_logo">
             <img src="{{ asset('admin/assets/images/mini_logo.png') }}" alt="" class="sp_mini_logo">
         </a>
     </div>
     <div class="side-menu-wrap">
         <ul class="main-menu">
                <li>
                    <a href="javascript:void(0);" class="active">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <title>shape-outline</title>
                                <path
                                    d="M11,13.5V21.5H3V13.5H11M9,15.5H5V19.5H9V15.5M12,2L17.5,11H6.5L12,2M12,5.86L10.08,9H13.92L12,5.86M17.5,13C20,13 22,15 22,17.5C22,20 20,22 17.5,22C15,22 13,20 13,17.5C13,15 15,13 17.5,13M17.5,15A2.5,2.5 0 0,0 15,17.5A2.5,2.5 0 0,0 17.5,20A2.5,2.5 0 0,0 20,17.5A2.5,2.5 0 0,0 17.5,15Z" />
                            </svg>
                        </span>
                        <span class="menu-text">
                            Categories
                        </span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ route('admin.categories') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Shop Categories
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.add_category') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Add Category
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.home_page_categories') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Home Page Category
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.mega_menu_categories') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Mega Menu Categories
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="active">
                        <span class="icon-menu feather-icon">
                            <i class="fa fa-amazon"></i>
                        </span>
                        <span class="menu-text">
                            Brands
                        </span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ route('admin.brands') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Available Brands
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.add_brand') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Add Brand
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="active">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <title>shape-outline</title>
                                <path
                                    d="M11,13.5V21.5H3V13.5H11M9,15.5H5V19.5H9V15.5M12,2L17.5,11H6.5L12,2M12,5.86L10.08,9H13.92L12,5.86M17.5,13C20,13 22,15 22,17.5C22,20 20,22 17.5,22C15,22 13,20 13,17.5C13,15 15,13 17.5,13M17.5,15A2.5,2.5 0 0,0 15,17.5A2.5,2.5 0 0,0 17.5,20A2.5,2.5 0 0,0 20,17.5A2.5,2.5 0 0,0 17.5,15Z" />
                            </svg>
                        </span>
                        <span class="menu-text">
                            SEO
                        </span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ route('admin.seo.view') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    View
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.seo.create') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Create
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="active">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <title>shape-outline</title>
                                <path
                                    d="M11,13.5V21.5H3V13.5H11M9,15.5H5V19.5H9V15.5M12,2L17.5,11H6.5L12,2M12,5.86L10.08,9H13.92L12,5.86M17.5,13C20,13 22,15 22,17.5C22,20 20,22 17.5,22C15,22 13,20 13,17.5C13,15 15,13 17.5,13M17.5,15A2.5,2.5 0 0,0 15,17.5A2.5,2.5 0 0,0 17.5,20A2.5,2.5 0 0,0 20,17.5A2.5,2.5 0 0,0 17.5,15Z" />
                            </svg>
                        </span>
                        <span class="menu-text">
                            Pages
                        </span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ route('admin.page.view') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    View
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.page.create') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Create
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.products') }}">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-package">
                                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </span>
                        <span class="menu-text">
                            Products
                        </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="active">
                        <span class="icon-menu feather-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <title>shape-outline</title>
                                <path
                                    d="M11,13.5V21.5H3V13.5H11M9,15.5H5V19.5H9V15.5M12,2L17.5,11H6.5L12,2M12,5.86L10.08,9H13.92L12,5.86M17.5,13C20,13 22,15 22,17.5C22,20 20,22 17.5,22C15,22 13,20 13,17.5C13,15 15,13 17.5,13M17.5,15A2.5,2.5 0 0,0 15,17.5A2.5,2.5 0 0,0 17.5,20A2.5,2.5 0 0,0 20,17.5A2.5,2.5 0 0,0 17.5,15Z" />
                            </svg>
                        </span>
                        <span class="menu-text">
                            Orders
                        </span>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ route('admin.orders') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    All Orders
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.orders.delivered') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Delivered
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.orders.dispatched') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Dispatched
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.orders.pending') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Pending
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.orders.canceled') }}">
                                <span class="icon-dash">
                                </span>
                                <span class="menu-text">
                                    Canceled
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
             {{-- <li>
                 <a href="{{route('admin.orders')}}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck">
                             <rect x="1" y="3" width="15" height="13"></rect>
                             <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                             <circle cx="5.5" cy="18.5" r="2.5"></circle>
                             <circle cx="18.5" cy="18.5" r="2.5"></circle>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Orders
                     </span>
                 </a>
             </li> --}}
             <li>
                 <a href="{{ route('admin.users') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-users">
                             <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                             <circle cx="9" cy="7" r="4"></circle>
                             <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                             <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Customers
                     </span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('admin.banners') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-calendar">
                             <rect x="3" y="4" width="18" height="18" rx="2"
                                 ry="2"></rect>
                             <line x1="16" y1="2" x2="16" y2="6"></line>
                             <line x1="8" y1="2" x2="8" y2="6"></line>
                             <line x1="3" y1="10" x2="21" y2="10"></line>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Banners
                     </span>
                 </a>
             </li>



             <li>
                 <a href="{{ route('admin.sale') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-pie-chart">
                             <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                             <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Sales Timer
                     </span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('admin.coupons') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-cloud">
                             <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Coupons
                     </span>
                 </a>
             </li>


             <li>
                 <a href="javascript:void(0);">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-mail">
                             <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                             </path>
                             <polyline points="22,6 12,13 2,6"></polyline>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Messages
                     </span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ route('admin.messages') }}">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Messages
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('admin.subscribe_mails') }}">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Subscribe Mail
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('admin.promotion_mails') }}">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Promotion Mail
                             </span>
                         </a>
                     </li>
                 </ul>
             </li>


             <li class="active-li">
                 <a href="{{ route('admin.setting') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-layers">
                             <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                             <polyline points="2 17 12 22 22 17"></polyline>
                             <polyline points="2 12 12 17 22 12"></polyline>
                         </svg>
                     </span>
                     <span class="menu-text">
                         General Settings
                     </span>
                 </a>
                 <!-- <ul class="sub-menu show-submenu">
                     <li>
                         <a href="blank.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Starter
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="cards.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Cards
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="product-single.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Product Single
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="wishlist.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Wishlist
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="cart.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Cart
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="checkout.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Checkout
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="faq.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Faq
                             </span>
                         </a>
                     </li>
                     <li>
                         <a href="error.html">
                             <span class="icon-dash">
                             </span>
                             <span class="menu-text">
                                 Error 404
                             </span>
                         </a>
                     </li>
                 </ul> -->
             </li>

             <li>
                 <a href="{{ route('admin.add_attribute') }}">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-voicemail">
                             <circle cx="5.5" cy="11.5" r="4.5"></circle>
                             <circle cx="18.5" cy="11.5" r="4.5"></circle>
                             <line x1="5.5" y1="16" x2="18.5" y2="16"></line>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Add Attribute
                     </span>
                 </a>
             </li>
             <li>
                 <a href="documentation.html">
                     <span class="icon-menu feather-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-paperclip">
                             <path
                                 d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                             </path>
                         </svg>
                     </span>
                     <span class="menu-text">
                         Documentation
                     </span>
                 </a>
             </li>
         </ul>
     </div>
 </aside>
