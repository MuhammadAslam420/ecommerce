              @php
              $categories=DB::table("categories")->inRandomOrder()->limit(10)->get();
              @endphp
               <div class="main-categori-wrap d-none d-lg-block">
                    <a class="categori-button-active" href="#">
                        <span class="fa fa-th"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-large">
                        <ul>
                        @foreach($categories as $category)
                            <li >
                                <a href="{{route('category',['slug'=>$category->slug])}}"><img src="{{asset('assets/images')}}/{{$category->logo}}" style="width:24px; border-radius:91px; border:1px solid green; margin-right:5px;">{{$category->name}}</a>

                            </li>
                            @endforeach
                            // <li class="has-children">
                            //     <a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                            //     <div class="dropdown-menu">
                            //         <ul class="mega-menu d-lg-flex">
                            //             <li class="mega-menu-col col-lg-7">
                            //                 <ul class="d-lg-flex">
                            //                     <li class="mega-menu-col col-lg-6">
                            //                         <ul>
                            //                             <li><span class="submenu-title">Jackets & Coats</span></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                            //                         </ul>
                            //                     </li>
                            //                     <li class="mega-menu-col col-lg-6">
                            //                         <ul>
                            //                             <li><span class="submenu-title">Suits & Blazers</span></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                            //                             <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                            //                         </ul>
                            //                     </li>
                            //                 </ul>
                            //             </li>
                            //             <li class="mega-menu-col col-lg-5">
                            //                 <div class="header-banner2">
                            //                     <img src="assets/images/menu-banner-4.jpg" alt="menu_banner1">
                            //                     <div class="banne_info">
                            //                         <h6>10% Off</h6>
                            //                         <h4>New Arrival</h4>
                            //                         <a href="#">Shop now</a>
                            //                     </div>
                            //                 </div>
                            //             </li>
                            //         </ul>
                            //     </div>
                            // </li>

                        </ul>
                        // <div class="more_categories">Show more...</div>
                    </div>
                </div>
