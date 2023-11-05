  <div class="main-content">
      <!-- Page Title Start -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-title-wrapper">
                  <div class="page-title-box">
                      <h4 class="page-title">Edit {{$name}}</h4>
                  </div>
                  <div class="breadcrumb-list">
                      <ul>
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
                          <li class="breadcrumb-link active">Basic Form</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- From Start -->
      @if(Session::has('msg'))
      <div class="alert alert-success">{{Session::get('msg')}}</div>
      @elseif(Session::has('err'))
      <div class="alert alert-danger">{{Session::get('err')}}</div>
      @endif
      <div class="from-wrapper">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-header">
                          <h4>Admin</h4>
                          <p class="card-desc">Edit Category</p>
                      </div>
                      <div class="card-body">
                          <form class="separate-form" enctype="multipart/form-data" wire:submit.prevent="UpdateCategory">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                  <h5 class="from-title mb-1">Category Info</h5>
                                  <div class="row">
                                      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                          <div class="form-group">
                                              <label for="member-name" class="col-form-label">Category Name</label>
                                              <input class="form-control" type="text" placeholder="Enter Category Name" name="name" wire:model="name" wire:keyup="generateslug">
                                              @error('name') <span class="text-danger">{{$message}}</span>@enderror
                                          </div>
                                      </div>
                                      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                          <div class="form-group">
                                              <label for="member-email" class="col-form-label">Category Slug(auto Generate)</label>
                                              <input class="form-control" type="text" placeholder="Category Slug" name="slug" wire:model="slug">
                                              @error('slug') <span class="text-danger">{{$message}}</span>@enderror
                                          </div>
                                      </div>
                                      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                          <div class="form-group">
                                              <label for="member-email" class="col-form-label">Category status</label>
                                              <select name="status" wire:model="status" class="form-control">
                                                  <option value="active">Active</option>
                                                  <option value="inactive">In-Active</option>
                                              </select>
                                              @error('status') <span class="text-danger">{{$message}}</span>@enderror
                                          </div>
                                      </div>

                                      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                          <div class="form-group">
                                              <label for="dob" class="col-form-label">Category Logo</label>
                                              <input type="file" class="form-control" name="newlogo" wire:model="newlogo" />
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                          <div wire:loading wire:target="newlogo" wire:key="newlogo"><i class="fa fa-spinner fa-spin mt-2 ml-2"></i> Uploading</div>


                                          {{-- ImagePreview --}}
                                          @if($newlogo)
                                          <img src="{{$newlogo->temporaryurl()}}" width="120" alt="">
                                          @else
                                          <img src="{{asset('assets/images/category')}}/{{$logo}}" width="120" alt="">
                                          @endif


                                      </div>
                                  </div>
                                  <div class="form-group mb-0">
                                      <button type="submit" class="btn btn-primary">Submit</button>

                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>

              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-title">
                              <h5>Recent Added Categories</h5>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-styled mb-0">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>slug</th>
                                          <th>Products Associate</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($categories as $category)

                                      <tr>

                                          <td>{{$category->id}}</td>
                                          <td>
                                              <span class="img-thumb">
                                                  <img src="{{asset('assets/images/category')}}/{{$category->logo}}" alt="">
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
                                                          <a href="javascript:void(0); " wire:click.prevent="deleteCategory('{{$category->id}}')"><i class="fa fa-trash mr-2 "></i>Delete</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
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
