 <main class="main">
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <i class="fa fa-arrow-right"></i> Shop
                 <i class="fa fa-arrow-right"></i> Compare
             </div>
         </div>
     </div>
     <section class="mt-50 mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="table-responsive">
                         <table class="table text-center">
                             @if(Cart::instance('compare')->count() > 0)

                             <tbody>

                                 <tr class="pr_image">
                                     <td class="text-muted font-md fw-600">Preview</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_img"><img src="{{asset('assets/images')}}/{{$item->model->front_image}}" width="150" alt="compare-img"></td>
                                     @endforeach
                                 </tr>

                                 <tr class="pr_title">
                                     <td class="text-muted font-md fw-600">Name</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="product_name">
                                         <h5><a href="{{route('product-detail',['slug'=>$item->model->slug])}}">{{$item->name}}</a></h5>
                                     </td>
                                     @endforeach

                                 </tr>
                                 <tr class="pr_price">
                                     <td class="text-muted font-md fw-600">Price</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="product_price"><span class="price">${{$item->price}}</span></td>
                                     @endforeach
                                 </tr>

                                 <tr class="description">
                                     <td class="text-muted font-md fw-600">Description</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_text font-xs">
                                         <p>{!! $item->model->description !!} </p>
                                     </td>
                                     @endforeach

                                 </tr>
                                 <tr class="pr_color">
                                     <td class="text-muted font-md fw-600">Color</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_color">
                                         <ul class="list-filter color-filter">
                                            @foreach($item->model->attributes as $attribute)
                                             <li><a href="#" data-color="{{$attribute->color}}"><span class="product-color-{{$attribute->color}}"></span></a></li>
                                             @endforeach

                                         </ul>
                                     </td>
                                     @endforeach
                                 </tr>
                                 <tr class="pr_size">
                                     <td class="text-muted font-md fw-600">Sizes Available</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_size">
                                         <ul class="list-filter size-filter mt-15 font-small">
                                            @foreach($item->model->attributes as $attribute)
                                             <li><a href="#">{{$attribute->size}}</a></li>
                                             @endforeach
                                         </ul>
                                     </td>
                                     @endforeach
                                 </tr>
                                 <tr class="pr_stock">
                                     <td class="text-muted font-md fw-600">Stock status</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_stock"><span>{{$item->stock}}</span></td>
                                     @endforeach
                                 </tr>
                                 <tr class="pr_add_to_cart">
                                     <td class="text-muted font-md fw-600">Buy now</td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_btn"><button class="btn  btn-sm" wire:click.prevent="moveProductFromCompareToCart('{{$item->rowId}}')"><i class="fa fa-shopping-bag mr-5"></i>Add to cart</button></td>
                                     @endforeach

                                 </tr>
                                 <tr class="pr_remove text-muted">
                                     <td class="text-muted font-md fw-600"></td>
                                     @foreach(Cart::instance('compare')->content() as $item)
                                     <td class="row_remove">
                                         <a href="#" wire:click="destroy('{{$item->rowId}}')"><i class="fa fa-trash mr-5"></i><span>Remove</span> </a>
                                     </td>
                                     @endforeach

                                 </tr>
                             </tbody>
                             @else
                             <tbody>
                                 <div>
                                     <img src="{{asset('assets/images/no-record.png')}}" alt="">
                                 </div>
                             </tbody>
                             @endif
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
