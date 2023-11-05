
                  <div class="header-action-icon-2">
                  @if(Cart::instance('cart')->count() > 0)
                            <a class="mini-cart-icon" href="#">
                                <img alt="Evara" src="{{asset('assets/images/icon-cart.svg')}}">
                                <span class="pro-count blue">{{Cart::instance('cart')->count()}}</span>
                            </a>

                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                  @foreach(Cart::instance('cart')->content() as $item)
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="{{route('product-detail',['slug'=>$item->model->slug])}}"><img alt="Evara" src="{{asset('assets/images')}}/{{$item->model->front_image}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="{{route('product-detail',['slug'=>$item->model->slug])}}">{{$item->name}}</a></h4>
                                            <h4><span>{{$item->qty}} × </span>${{$item->price}}</h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </li>
                                  @endforeach
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>${{Cart::total()}}</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="/cart" class="outline">View cart</a>
                                        <a href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </div>

                            @else
                             <a class="mini-cart-icon" href="#">
                                <img alt="Evara" src="{{asset('assets/images/icon-cart.svg')}}">
                                <span class="pro-count blue">0</span>
                            </a>
                            @endif

                        </div>