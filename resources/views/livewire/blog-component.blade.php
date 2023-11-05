    <main class="main" wire:ignore>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <i class="fa fa-arrow-right"></i> Blog
                    <i class="fa fa-arrow-right"></i> Technology
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50 text-center">
                            <h1 class="font-xxl text-brand">Our Blog</h1>
                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                <span class="post-by">{{$categories}} Categories</span>
                                <span class="post-on has-dot">{{$blogs->count()}} Blog</span>
                                <span class="time-reading has-dot">3azone Author</span>
                                <span class="hit-count  has-dot">{{$views}} Views</span>
                            </div>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                @foreach($blogs as $blog)
                                <div class="col-lg-4">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="{{route('blog-detail',['slug'=>$blog->slug])}}">
                                                <img src="{{asset('assets/images')}}/{{$blog->image}}" alt="{{$blog->title}}">
                                            </a>
                                            <div class="entry-meta">
                                                <a class="entry-meta meta-2" href="{{route('category',['slug'=>$blog->category->slug])}}">Sport</a>
                                            </div>
                                        </div>
                                        <div class="entry-content-2">
                                            <h3 class="post-title mb-15">
                                                <a href="{{route('blog-detail',['slug'=>$blog->slug])}}">{{$blog->title}}</a>
                                            </h3>
                                            <p class="post-exerpt mb-30">{!! Str::limit($blog->description,30) !!}</p>
                                            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                <div>
                                                    <span class="post-on"> <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MM Do YYYY')}}</span>
                                                    <span class="hit-count has-dot">{{$blog->views}} Views</span>
                                                </div>
                                                <a href="{{route('blog-detail',['slug'=>$blog->slug])}}" class="text-brand">Read more <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--post-grid-->
                        <div class="pagination-area mt-15 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                {{$blogs->links('pagination::bootstrap-4')}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
