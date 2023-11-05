 <main class="main">
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <span></span> Pages
                 <span></span> Account
             </div>
         </div>
     </div>
     <section class="pb-150">

         <div class="container">
             <div class="table-responsive">
                 <table class="table table-strip">
                     <thead>
                         <tr>
                             <th>Sr#</th>
                             <th>Order#</th>
                             <th>Order Total</th>
                             <th>Customer</th>
                             <th>Order Status</th>
                             <th>Delivery Date</th>
                             <th>Order Date</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($orders as $order)
                         @php
                         $i=1;
                         @endphp
                         <tr>
                             <td>{{$i++}}</td>
                             <td>{{$order->id}}</td>
                             <td>{{$order->total}}</td>
                             <td>
                                 <div>
                                     <p>{{$order->firstname}} {{$order->lastname}}</p>
                                     <p>Email:<span>{{$order->email}}</span></p>
                                     <p>Mobile:<span>{{$order->mobile}}</span></p>
                                 </div>
                             </td>
                             <td>{{$order->status}}</td>
                             @if($order->status ==='delivered')
                             <td>{{$order->delivery_date}}</td>
                             @elseif($order->status === 'cancel')
                             <td>{{$order->cancel_date}}</td>
                             @else
                             <td>&nbsp;</td>
                             @endif
                             <td>{{$order->created_at}}</td>
                             <td>
                                 <a href="{{route('user_order.detail',['id'=>$order->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></a>
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                 {{$orders->links('pagination::bootstrap-4')}}
             </div>
         </div>
     </section>
 </main>
