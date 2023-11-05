<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">Home</a>
                <i class="fa fa-arrow-right"></i> Shop
                <i class="fa fa-arrow-right"></i> Your Cart
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(Cart::instance('cart')->content() as $item)
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{asset('assets/images')}}/{{$item->model->front_image}}" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="{{route('product-detail',['slug'=>$item->model->slug])}}">{{$item->name}}</a></h5>

                                    </td>
                                    <td class="price" data-title="Price"><span>${{$item->price}} </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius m-auto" wire:ignore>
                                            <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><i class="fa fa-angle-down"></i></a>
                                            <input type="text" class="qty-val" min="0" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*" style="border:none;padding:0;margin:0;">
                                            <a href="#" class="qty-up" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><i class="fa fa-angle-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>${{Cart::subtotal()}} </span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')" class="text-muted"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @empty

                                <div>
                                    <img src="{{asset('assets/images/no-record.png')}}" class="img-fluid" width="1000px" alt="">
                                </div>

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="cart-action text-end">
                        <a class="btn  mr-10 mb-sm-15" wire:click="updateCart"><i class="fa fa-random mr-10"></i>Update Cart</a>
                        <a class="btn " href="/shop"><i class="fa fa-shopping-bag mr-10"></i>Continue Shopping</a>
                    </div>
                    <div class="divider center_icon mt-50 mb-50"><i wire:loading.class="fa fa-spinner text-info"></i></div>
                    <div class="row mb-50">
                        <div class="col-lg-6 col-md-12">
                            <div class="heading_s1 mb-3">
                                <h4>Calculate Shipping</h4>
                            </div>
                            <p class="mt-15 mb-30">Flat rate shipping rate for Pakistan: <span class="font-xl text-brand fw-900">200 PKR.</span></p>
                            @if(!Session::has('country'))
                            <form class="field_form shipping_calculator" wire:submit.prevent="applyShippingCharges">
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <div class="custom_select">
                                            <select class="form-control" wire:model="country_id">
                                                <option value="">Choose a option...</option>
                                                @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-row row">
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="State / Country" name="name" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                    </div>
                                </div> -->
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="btn  btn-sm pull-right"><i class="fa fa-shuffle mr-10"></i>Update</button>
                                    </div>
                                </div>
                            </form>
                            @endif
                            <div class="mb-30 mt-50">
                                <div class="heading_s1 mb-3">
                                    <h4>Apply Coupon</h4>
                                </div>
                                <div class="total-amount">
                                    @if(Session::has('message'))
                                    <div class="alert alert-primary text-dark">{{Session::get('message')}}</div>
                                    @endif
                                    <div class="left">
                                        <div class="coupon">
                                            @if(!Session::has('coupon'))
                                            <form wire:submit.prevent="applyCouponCode">
                                                <div class="form-row row justify-content-center">
                                                    <div class="form-group col-lg-6">
                                                        <input class="font-medium" name="Coupon" placeholder="Enter Your Coupon" wire:model="couponCode">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <button type="submit" class="btn  btn-sm"><i class="fa fa-label mr-10"></i>Apply</button>
                                                    </div>
                                                </div>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="border p-md-4 p-30 border-radius cart-totals">
                                <div class="heading_s1 mb-3">
                                    <h4>Cart Totals</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        @if(Session::has('coupon'))
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label">
                                                    <h6 class="text-muted">Discount </h6>
                                                </td>
                                                <td class="cart_total_amount">
                                                    <h4 class="text-brand text-end">({{ Session::get('coupon')['code'] }})
                                                        <a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger fa-2x"></i></a>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">SubTotal with Discount</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{ number_format($subtotalAfterDiscount, 2) }}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Tax ({{ config('cart.tax') }})% </td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> {{ number_format($taxAfetrDiscount, 2) }}</td>
                                            </tr>
                                            <!-- <tr>
                                                <td class="cart_total_label">Shipping Charges </td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> {{ number_format(($totalAfterDiscount) - ($taxAfetrDiscount + $subtotalAfterDiscount),2) }}</td>
                                            </tr> -->
                                            <tr>
                                                <td class="cart_total_label">Total with Discount</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{ number_format($totalAfterDiscount, 2) }}</span></strong></td>
                                            </tr>
                                        </tbody>
                                        @else
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label">Cart Subtotal</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{Cart::subtotal()}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Tax</td>
                                                <td class="cart_total_amount"> <i class="fa fa-gift mr-5"></i> ${{Cart::tax()}}</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{Cart::total()}}</span></strong></td>
                                            </tr>
                                        </tbody>
                                        @endif
                                    </table>
                                </div>
                                <a href="/checkout" class="btn "> <i class="fa fa-box-alt mr-10"></i> Proceed To CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
