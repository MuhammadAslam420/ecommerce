<div class="main-content" wire:ignore>
    <!-- Page Title Start -->
    <div class="row">
        <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Invoice</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="index.html"><i class="fa fa-home mr-2"></i>Dashboard</a>
                        </li>
                        <li class="breadcrumb-link active">Invoice</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Table Start -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="ad-invoice-title">
                        <h4>Order - {{ $order->id }}</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="mb-2">Billed To:</h5>
                            <p>{{ $order->firsname }}&nbsp;{{ $order->lastname }}</p>
                            <p>{{ $order->address1 }}</p>
                            <p>{{ $order->address2 }}</p>
                            <p>{{ $order->city }}, {{ $order->province }} &nbsp;{{ $order->country }}</p>
                        </div>
                        @if ($order->is_shipping_aifferent == 1)
                            <div class="col-sm-6 text-sm-end">
                                <h5 class="mb-2">Shipped To:</h5>
                                <p>{{ $order->shipping->firsname }}&nbsp;{{ $order->shipping->lastname }}</p>
                                <p>{{ $order->shipping->address1 }}</p>
                                <p>{{ $order->shipping->address2 }}</p>
                                <p>{{ $order->shipping->city }}, {{ $order->shipping->province }} &nbsp;{{ $order->shipping->country }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <h5 class="mb-2">Conatct & Payment Method:</h5>
                            <p>{{$order->mobile}}</p>
                            <p>{{$order->email}}</p>
                            <p>{{$order->transaction->mode}}</p>
                        </div>
                        <div class="col-sm-6 mt-3 text-sm-end">
                            <h5 class="mb-2">Order Date:</h5>
                            <p>{{\Carbon\Carbon::parse($order->created_at)->isoFormat("MMM Do YYYY")}}</p>
                        </div>
                    </div>
                    <div class="py-2 mt-3 mb-2">
                        <h4 class="font-size-15">Order Summary</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-styled mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th class="text-end">Price</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($order->items as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td class="text-end">{{$item->price}}</td>
                                    <td>{{$item->qty}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" class="text-end">Tax</td>
                                    <td class="text-end">${{$order->tax}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <strong>Discount</strong>
                                    </td>
                                    <td class=" text-end">${{$order->discount}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">Sub Total</td>
                                    <td class="text-end">${{$order->subtotal}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td class=" text-end">${{$order->shipping_charges}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <strong>Total</strong>
                                    </td>
                                    <td class=" text-end">
                                        <h4 class="m-0">${{$order->total}}</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-print-none mt-2">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                    class="fa fa-print"></i></a>
                            <a href="#" wire:click="generateInvoice"
                                class="btn btn-primary w-md waves-effect waves-light">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ad-footer-btm">
        <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
    </div>
</div>
