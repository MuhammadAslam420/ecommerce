@php
$categories=DB::table('categories')->inRandomOrder()->limit(10)->get();
@endphp
<div class="widget-category mb-30">
    <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
    <ul class="categories">
        @forelse($categories as $category)
        <li><a href="{{route('category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
        @empty
        <li><a href="shop-grid-right.html">Blouses & Shirts</a></li>
        <li><a href="shop-grid-right.html">Dresses</a></li>
        <li><a href="shop-grid-right.html">Swimwear</a></li>
        <li><a href="shop-grid-right.html">Beauty</a></li>
        <li><a href="shop-grid-right.html">Jewelry & Watch</a></li>
        <li><a href="shop-grid-right.html">Accessories</a></li>
        @endforelse
    </ul>
</div>
