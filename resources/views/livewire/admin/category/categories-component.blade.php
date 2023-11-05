  <div class="main-content">
      <!-- Page Title Start -->
      <div class="row">
          <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-title-wrapper">
                  <div class="page-title-box">
                      <h2 class="page-title bold">Categories Table</h2>
                  </div>
                  <div class="breadcrumb-list">
                      <ul>
                          <li class="breadcrumb-link">
                              <a href="{{route('admin.dashboard')}}"><i class="fas fa-home mr-2"></i>Home</a>
                          </li>
                          <li class="breadcrumb-link active">Table</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- Table Start -->
      <div class="row">

          <!-- Styled Table Card-->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card table-card">
                  <div class="card-header pb-0">
                      <h4>Categories Table</h4>
                      <p class="card-desc"> Available Categories <code>{{$categories->count()}}</code></p>
                  </div>
                  <div class="card-body">
                      <div class="chart-holder">
                          <div class="table-responsive">
                              <table class="table table-styled mb-0">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>ID</th>
                                          <th>Category</th>
                                          <th>Slug</th>
                                          <th>Products Associate</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php
                                      $i=1;
                                      @endphp
                                      @foreach($categories as $category)

                                      <tr>
                                          <td>{{$i++}}</td>
                                          <td>{{$category->id}}</td>
                                          <td>
                                              <span class="img-thumb">
                                                  <img src="{{asset('assets/images')}}/{{$category->logo}}" alt="">
                                                  <span class="ml-2">{{$category->name}}</span>
                                              </span>
                                          </td>
                                          <td>
                                              {{$category->slug}}
                                          </td>
                                          <td>
                                              @php
                                              $products=DB::table('products')->where('category_id',$category->id)->count();
                                              @endphp
                                              {{$products}}
                                          </td>
                                          <td>
                                              @if($category->status === 'active')
                                              <a href="#" wire:click.prevent="updateStatus('{{$category->id}}','inactive')"><label class="mb-0 badge badge-success toltiped">{{$category->status}}</label></a>
                                              @else
                                              <a href="#" wire:click.prevent="updateStatus('{{$category->id}}','active')"><label class="mb-0 badge badge-danger toltiped">{{$category->status}}</label></a>
                                              @endif
                                          </td>
                                          <td class="relative ">
                                              <a class="action-btn " href="javascript:void(0); ">
                                                  <svg class="default-size " viewBox="0 0 341.333 341.333 ">
                                                      <g>
                                                          <g>
                                                              <g>
                                                                  <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z "></path>
                                                                  <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z "></path>
                                                                  <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z "></path>
                                                              </g>
                                                          </g>
                                                      </g>
                                                  </svg>
                                              </a>
                                              <div class="action-option ">
                                                  <ul>
                                                      <li>
                                                          <a href="{{route('admin.edit_category',['slug'=>$category->slug])}} "><i class="fa fa-edit mr-2 "></i>Edit</a>
                                                      </li>
                                                      <li>
                                                          <a href="#" onclick="confirm('Are You Sure, You want to delete the Category!.') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory('{{$category->id}}')"><i class="fa fa-trash mr-2 "></i>Delete</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                              {{$categories->links("pagination::bootstrap-4")}}
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
