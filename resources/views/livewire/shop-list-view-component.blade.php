  <main class="main" wire:ignore>
      <div class="page-header breadcrumb-wrap">
          <div class="container">
              <div class="breadcrumb">
                  <a href="/" rel="nofollow">Home</a>
                  <i class="fa fa-arrow-right"></i> Shop
              </div>
          </div>
      </div>
      <section class="mt-50 mb-50">
          <div class="container">
              <div class="row flex-row-reverse">
                  <div class="col-lg-9">
                      <div class="shop-product-fillter style-2">
                          <div class="totall-product">
                              <p> We found <strong class="text-brand">{{$products->count()}}</strong> items for you!</p>
                          </div>
                          <div class="sort-by-product-area">
                              <x-list />
                              <x-grid />
                              <x-right_grid />
                              <x-perPage />
                              <x-sort />
                          </div>
                      </div>
                      <div class="product-list mb-50">
                          @forelse($products as $product)
                          <div class="product-cart-wrap">
                              <div class="product-img-action-wrap">
                                  <div class="product-img product-img-zoom">
                                      <div class="product-img-inner">
                                          <a href="{{route('product-detail',['slug'=>$product->slug])}}">
                                              <img class="default-img" src="{{asset('assets/images')}}/{{$product->front_image}}" alt="{{$product->slug}}">
                                              <img class="hover-img" src="{{asset('assets/images')}}/{{$product->back_image}}" alt="{{$product->slug}}">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="product-action-1">
                                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal-{{$product->id}}">
                                          <i class="fa fa-search"></i></a>
                                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('{{$product->id}}','{{$product->name}}',{{$product->price}})"><i class="fa fa-heart"></i></a>
                                      <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('{{$product->id}}','{{$product->name}}',{{$product->price}})"><i class="fa fa-random"></i></a>
                                  </div>
                                  <div class="product-badges product-badges-position product-badges-mrg">
                                      <span class="hot">Hot</span>
                                  </div>
                              </div>
                              <div class="product-content-wrap">
                                  <div class="product-category">
                                      <a href="shop-grid-right.html">{{$product->category->name}}</a>
                                  </div>
                                  <h2><a href="{{route('product-detail',['slug'=>$product->slug])}}">{{$product->name}}</a></h2>
                                  <div class="product-price">
                                      <span>${{$product->price}} </span>

                                  </div>
                                  <p class="mt-15">{{$product->short_description}}</p>
                                  <br>
                                  <div class="product-action-1 show">
                                      @php
                                      $review=0;

                                      $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                                      if ($orders != 0) {
                                                  $review = ($product->reviews->count() / $orders) * 100;
                                              }
                                      @endphp
                                      <div class="rating-result" title="{{$review}}%">
                                        <span>{{$review}}%</span>
                                      </div>

                                  </div>
                                  <a aria-label="Buy now" class="btn btn-success p-2" href="#" wire:click.prevent="store('{{$product->id}}','{{$product->name}}',{{$product->price}})"><i class="fa fa-shopping-bag mr-1"></i>Add to Cart</a>

                              </div>
                          </div>
                          <div class="modal fade custom-modal" id="quickViewModal-{{$product->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <button type="button" class="btn-close bg-dark text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-gallery">
                                                    <span class="zoom-icon"><i class="fa fa-search"></i></span>
                                                    <!-- MAIN SLIDES -->
                                                    <div class="product-image-slider">
                                                        <figure class="border-radius-10">
                                                            <img src="{{asset('assets/images')}}/{{$product->front_image}}" alt="product image">
                                                        </figure>
                                                        <figure class="border-radius-10">
                                                            <img src="{{asset('assets/images')}}/{{$product->back_image}}" alt="product image">
                                                        </figure>

                                                    </div>
                                                    <!-- THUMBNAILS -->
                                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                                        <div><img src="{{asset('assets/images')}}/{{$product->front_image}}" alt="product image"></div>
                                                        <div><img src="{{asset('assets/images')}}/{{$product->back_image}}" alt="product image"></div>

                                                    </div>
                                                </div>
                                                <!-- End Gallery -->
                                                <div class="social-icons single-share">
                                                    <ul class="text-grey-5 d-inline-block">
                                                        <li><strong class="mr-10">Share this:</strong></li>
                                                        <li class="social-facebook"><a href="#"><img src="{{asset('assets/images/icon-facebook.svg')}}" alt=""></a></li>
                                                        <li class="social-twitter"> <a href="#"><img src="{{asset('assets/images/icon-twitter.svg')}}" alt=""></a></li>
                                                        <li class="social-instagram"><a href="#"><img src="{{asset('assets/images/icon-instagram.svg')}}" alt=""></a></li>
                                                        <li class="social-linkedin"><a href="#"><img src="{{asset('assets/images/icon-pinterest.svg')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="detail-info">
                                                    <h3 class="title-detail mt-30"><a href="{{route('product-detail',['slug'=>$product->slug])}}"> {{$product->name}}</a></h3>
                                                    <div class="product-detail-rating">
                                                        <div class="pro-details-brand">
                                                            <span> Brands: <a href="#">{{$product->brand->name}}</a></span>
                                                        </div>
                                                        <div class="product-rate-cover text-end">
                                                            <div class="product-rate d-inline-block">
                                                               @php
                                                               $review=0;

                                                               $orders=DB::table('order_items')->where('product_id',$product->id)->count();
                                                               if ($orders != 0) {
                                                                           $review = ($product->reviews->count() / $orders) * 100;
                                                                       }
                                                               @endphp
                                                                <div class="product-rating" style="width:{{$review}}%">
                                                                </div>
                                                            </div>
                                                            <span class="font-small ml-5 text-muted"> ({{$product->reviews->count()}} reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix product-price-cover">
                                                        <div class="product-price primary-color float-left">
                                                            <ins><span class="text-brand">${{$product->price}}</span></ins>

                                                        </div>
                                                    </div>
                                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                                    <div class="short-desc mb-30">
                                                        <p class="font-sm">{{$product->short_description}}</p>
                                                    </div>

                                                    <div class="attr-detail attr-color mb-15"  >
                                                        <strong class="mr-10">Color</strong>


                                                           <strong class="mr-10">Color</strong>
                                                           <ul class="list-filter color-filter" >
                                                               @foreach($product->attributes as $attribute)
                                                               <li><a href="#" wire:click="setColor('{{$attribute->color}}')"><span class="product-color-{{$attribute->color}}"></span></a></li>                                                                @endforeach

                                                           </ul>



                                                    </div>
                                                    <div class="attr-detail attr-size" style="display: flex;flex-direction:row;" >
                                                        <strong class="mr-10">Size</strong>
                                                        @foreach($product->attributes as $attribute)
                                                        <ul class="list-filter size-filter font-small" >
                                                           <li><a href="#" wire:click="setSize('{{$attribute->size}}')">{{$attribute->size}}</a></li>
                                                       </ul>
                                                        @endforeach
                                                    </div>
                                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                                    <div class="detail-extralink">

                                                        <div class="product-extra-link2">
                                                            <button type="button" class="button button-add-to-cart" wire:click.prevent="store('{{$product->id}}','{{$product->name}}',{{$product->price}})">Add to cart</button>
                                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="wishlist('{{$product->id}}','{{$product->name}}',{{$product->price}})"><i class="fa fa-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn hover-up" href="#" wire:click.prevent="compare('{{$product->id}}','{{$product->name}}',{{$product->price}})"><i class="fa fa-random"></i></a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta font-xs color-grey mt-50">
                                                        <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                                        <li class="mb-5">Tags: <a href="{{route('category',['slug'=>$product->category->slug])}}" rel="tag">{{$product->category->name}}</a></li>
                                                        <li>Availability:<span class="in-stock text-success ml-5">{{$product->quantity}} Items {{$product->stockstatus}}</span></li>
                                                    </ul>
                                                </div>
                                                <!-- Detail Info -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!--single product-->
                          @empty
                          <div class="product-cart-warp">
                              <img src="{{asset('assets/images/no-records.png')}}" alt="">
                          </div>
                          @endforelse
                      </div>
                      <!--pagination-->
                      <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            {{$products->links("pagination::bootstrap-4")}}
                        </nav>
                    </div>
                  </div>
                  <div class="col-lg-3 primary-sidebar sticky-sidebar" wire:ignore>
                      <x-categories />
                      <!-- Fillter By Price -->
                      <x-priceslider />
                      <!-- Product sidebar Widget -->
                      <x-product_sidebar />
                      <x-banner_sidebar />
                  </div>
              </div>
          </div>
      </section>
  </main>
  @push('scripts')
  <script>
      var slider = document.getElementById('slider');
      noUiSlider.create(slider, {
          start: [0, 10000],
          connect: true,
          range: {
              'min': 10,
              'max': 10000
          },
          pips: {
              mode: 'steps',
              stepped: true,
              density: 1
          }
      });
      slider.noUiSlider.on('update', function(value) {
          @this.set('min_price', value[0]);
          @this.set('max_price', value[1]);
      });
  </script>
  @endpush
