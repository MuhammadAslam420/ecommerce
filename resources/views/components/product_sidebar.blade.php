<div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
    <div class="widget-header position-relative mb-20 pb-10">
        <h5 class="widget-title mb-10">New products</h5>
        <div class="bt-1 border-color-1"></div>
    </div>
    @php
    $products=DB::table('products')->inRandomOrder()->orderBy('id','desc')->take(3)->get();
    @endphp
    @forelse($products as $product)
    <div class="single-post clearfix">
        <div class="image">
            <img src="{{asset('assets/images')}}/{{$product->front_image}}" alt="{{$product->slug}}">
        </div>
        <div class="content pt-10">
            <h5><a href="{{route('product-detail',['slug'=>$product->slug])}}">{{$product->name}}</a></h5>
            <p class="price mb-0 mt-5">${{$product->price}}</p>
            <div class="product-rate">
                <div class="product-rating" style="width:90%"></div>
            </div>
        </div>
    </div>

    @empty
    <div class="single-post clearfix">
        <div class="image">
            <img src="{{asset('assets/images/thumbnail-3.jpg')}}" alt="#">
        </div>
        <div class="content pt-10">
            <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
            <p class="price mb-0 mt-5">$99.50</p>
            <div class="product-rate">
                <div class="product-rating" style="width:90%"></div>
            </div>
        </div>
    </div>
    <div class="single-post clearfix">
        <div class="image">
            <img src="{{asset('assets/images/thumbnail-4.jpg')}}" alt="#">
        </div>
        <div class="content pt-10">
            <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
            <p class="price mb-0 mt-5">$89.50</p>
            <div class="product-rate">
                <div class="product-rating" style="width:80%"></div>
            </div>
        </div>
    </div>
    <div class="single-post clearfix">
        <div class="image">
            <img src="{{asset('assets/images/thumbnail-5.jpg')}}" alt="#">
        </div>
        <div class="content pt-10">
            <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
            <p class="price mb-0 mt-5">$25</p>
            <div class="product-rate">
                <div class="product-rating" style="width:60%"></div>
            </div>
        </div>
    </div>
    @endforelse
</div>
