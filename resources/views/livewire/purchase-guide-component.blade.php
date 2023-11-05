   <main class="main">
       <div class="page-header breadcrumb-wrap">
           <div class="container">
               <div class="breadcrumb">
                   <a href="/" rel="nofollow">Home</a>
                   <i class="fa fa-arrow-right"></i> Pages
                   <i class="fa fa-arrow-right"></i> {{$page->title}}
               </div>
           </div>
       </div>
       <section class="mt-50 mb-50">
           <div class="container custom">
               <div class="row">
                   <div class="col-lg-12">
                    {!! $page->conetnt !!}
                   </div>
               </div>
           </div>
       </section>
   </main>
