  <div class="main-content">
      <!-- Page Title Start -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-title-wrapper">
                  <div class="page-title-box">
                      <p>Detail Of Order</p>

                  </div>
                  <div class="breadcrumb-list">
                      <ul>
                          <li class="breadcrumb-link">
                              <a href="{{route('admin.order_invoice',['id'=>$order->id])}}" class=" p-2"><i class="fa fa-file-pdf"></i>Order Invoice</a>
                          </li>

                          <li class="breadcrumb-link">
                              <a href="{{route('admin.dashboard')}}">
                                  <span class="icon-menu feather-ico">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                          <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                      </svg>
                                  </span>
                                  Dashboard</a>
                          </li>
                          <li class="breadcrumb-link active">Basic Table</li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- From Start -->

      <div class="from-wrapper">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-title">
                              <h5>Order Detail</h5>
                              <div class="pull-right">
                                  <a href="{{route('admin.dashboard')}}" class="btn btn-success">Dashboard</a>
                              </div>
                              @if($order->status ==='delivered' && $order->delivery_date !=NULL)
                              <div class="pull-right">
                              <a href="#" class="btn btn-success">Order Delivered</a>
                              </div>
                              @elseif($order->status ==='dispatch')
                              <div class="pull-right">
                              <a href="#" class="btn btn-warning">Order Dispatch</a>
                              </div>
                              <div class="pull-right">
                                <a href="#" wire:click.prevent="changeStatus('{{ $order->id }}','delivered')" class="btn btn-success">Delivered Order</a>
                            </div>
                              @else
                              <div class="pull-right">
                                <a href="#" wire:click.prevent="changeStatus('{{ $order->id }}','cancel')" class="btn btn-danger">Cancel Order</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" wire:click.prevent="changeStatus('{{ $order->id }}','dispatch')" class="btn btn-warning">Dispatch Order</a>
                            </div>

                            <div class="pull-right">
                                <a href="#" wire:click.prevent="changeStatus('{{ $order->id }}','delivered')" class="btn btn-success">Delivered Order</a>
                            </div>
                              @endif

                          </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>Order ID</th>
                                          <th>Discount</th>
                                          <th>Tax</th>
                                          <th>Shipping Charges</th>
                                          <th>SubTotal</th>
                                          <th>Total</th>
                                          <th>Status</th>
                                          @if($order->delivery_date !=NULL)
                                          <th>Delivery Date</th>
                                          @elseif($order->cancel_date !=NULL)
                                          <th>Cancel Date</th>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>{{$order->id}}</td>
                                          <td>{{$order->discount}}</td>
                                          <td>{{$order->tax}}</td>
                                          <td>{{$order->shipping_charges}}</td>
                                          <td>{{$order->subtotal}}</td>
                                          <td>{{$order->total}}</td>
                                          <td style="text-transform:capitalize;">{{$order->status}}</td>
                                          @if($order->delivery_date !=NULL)
                                          <td>{{$order->delivery_date}}</td>
                                          @elseif($order->cancel_date !=NULL)
                                          <td>{{$order->cancel_date}}</td>
                                          @endif

                                      </tr>
                                  </tbody>
                              </table>


                          </div>
                          <h4 class="card-title mt-5">Product Detail</h4>
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($order->items as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <div>
                                            <img src="{{asset('assets/images') }}/{{ $item->product->front_image }}" width="75">
                                            <p>Product: <span>{{ $item->product->name }}</span></p>
                                        </div>
                                    </td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->size }}</td>
                                    <td>{{ $item->color }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-light">Discount</td>
                                    <td class="text-light">{{ $order->discount }}</td>
                                    <td class="text-light">Shipping</td>
                                    <td class="text-light">{{ $order->shipping_charges }}</td>
                                    <td class="text-light">Tax</td>
                                    <td class="text-light">{{ $order->tax }}</td>

                                </tr>
                                <tr>
                                    <td class="text-light">SubTotal</td>
                                    <td class="text-light">{{ $order->subtotal }}</td>
                                    <td class="text-light">Total</td>
                                    <td class="text-light">{{ $order->total }}</td>
                                </tr>
                            </tfoot>

                          </table>
                          <h4 class="card-title mt-5">Shipping Address</h4>
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Line Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Country</th>
                                    <th>ZipCode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            {{ $order->firstname }}&nbsp;{{ $order->lastname }}
                                            <p>Email: <span>{{ $order->email }}</span></p>
                                            <p>Mobile: <span>{{ $order->mobile }}</span></p>
                                        </div>
                                    </td>
                                    <td>{{ $order->address1 }}&nbsp;{{ $order->address2 }}</td>
                                    <td>{{ $order->city }}</td>
                                    <td>{{ $order->province }}</td>
                                    <td>{{ $order->country }}</td>
                                    <td>{{ $order->zipcode }}</td>
                                </tr>
                            </tbody>
                          </table>
                          @if($order->is_shipping_different ==1)
                          <h4 class="card-title mt-5">Billing Address</h4>
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Line Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Country</th>
                                    <th>ZipCode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            {{ $order->firstname }}&nbsp;{{ $order->lastname }}
                                            <p>Email: <span>{{ $order->email }}</span></p>
                                            <p>Mobile: <span>{{ $order->mobile }}</span></p>
                                        </div>
                                    </td>
                                    <td>{{ $order->address1 }}&nbsp;{{ $order->address2 }}</td>
                                    <td>{{ $order->city }}</td>
                                    <td>{{ $order->province }}</td>
                                    <td>{{ $order->country }}</td>
                                    <td>{{ $order->zipcode }}</td>
                                </tr>
                            </tbody>
                          </table>
                          @endif
                          <h4 class="card-title mt-5">Transaction Info</h4>
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $order->transaction->mode }}</td>
                                    <td>{{ $order->transaction->status }}</td>
                                    <td>{{ $order->transaction->created_at }}</td>
                                </tr>
                            </tbody>
                          </table>
                      </div>
                  </div>
              </div>


          </div>

      </div>
      <div class="ad-footer-btm">
          <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
      </div>
  </div>
