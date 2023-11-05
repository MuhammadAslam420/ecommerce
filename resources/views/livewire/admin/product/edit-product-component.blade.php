  <div class="main-content" id="main">
      <!-- Page Title Start -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-title-wrapper">
                  <div class="page-title-box">
                      <h4 class="page-title">{{$name}} Product</h4>
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
                          <li class="breadcrumb-link active">Basic From</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- From Start -->
      <div class="from-wrapper">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <h5>Edit / Update {{$name}} Product</h5>
                      <div class="pull-right">
                          <a href="{{route('admin.products')}}" class="btn btn-success">Available Product</a>
                      </div>
                  </div>
              </div>
              <div class="card-body">
                  <form enctype="multipart/form-data" wire:submit="editProduct">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="label-control">Product Name <b class="text-danger">*</b></label>
                                  <input type="text" name="name" id="name" class="form-control" wire:model="name" wire:keyup="generateslug">
                                  @error('name') <span class="text-danger">{{$message}}</span>@enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="label-control">Product Slug(Auto Generate) <b class="text-danger">*</b></label>
                                  <input type="text" name="slug" id="slug" class="form-control" wire:model="slug">
                                  @error('slug') <span class="text-danger">{{$message}}</span>@enderror
                              </div>
                          </div>
                          <div class="col-md-3">
                              <label for="price" class="label-control">Price <b class="text-danger">*</b></label>
                              <input type="text" name="price" id="price" class="form-control" wire:model="price">
                              @error('price') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-3">
                              <label for="sale_price" class="label-control">Sale Price</label>
                              <input type="text" name="sale_price" id="sale_price" class="form-control" wire:model="sale_price">
                              @error('sale_price') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-3">
                              <label for="qty" class="label-control">Quantity <b class="text-danger">*</b></label>
                              <input type="text" name="qty" id="qty" class="form-control" wire:model="qty">
                              @error('qty') <span class="text-danger">{{$message}}</span>@enderror
                          </div>

                          <div class="col-md-3">
                              <label for="SKU" class="label-control">SKU <b class="text-danger">*</b></label>
                              <input type="text" name="SKU" id="SKU" placeholder="SKU0001" class="form-control" wire:model="SKU">
                              @error('SKU') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="status" class="label-control">Status <b class="text-danger">*</b></label>
                              <select name="status" id="status" class="form-select" wire:model="status">
                                  <option value="" selected>Choose Status</option>
                                  <option value="in-active">Inactive</option>
                                  <option value="active">Active</option>
                              </select>
                              @error('status') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="stock" class="label-control">Stock <b class="text-danger">*</b></label>
                              <select name="stock" id="stock" class="form-select" wire:model="stock">
                                  <option value="" selected>Choose Stock</option>
                                  <option value="InStock">InStock</option>
                                  <option value="OutOfStock">OutOfStock</option>
                              </select>
                              @error('stock') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="featured" class="label-control">Featured <b class="text-danger">*</b></label>
                              <select name="featured" id="featured" class="form-select" wire:model="featured">
                                  <option value="" selected>Choose Featured</option>
                                  <option value="0">Non Featured</option>
                                  <option value="1">Featured</option>
                              </select>
                              @error('status') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="product_type" class="label-control">Product Type <b class="text-danger">*</b></label>
                              <select name="product_type" id="product_type" class="form-select" wire:model="product_type">
                                  <option value="" selected>Choose Product Type</option>
                                  <option value="New">New</option>
                                  <option value="Used">Used</option>
                                  <option value="Refurnished">Refurnished</option>
                              </select>
                              @error('product_type') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="category_id" class="label-control">Category <b class="text-danger">*</b></label>
                              <select name="category_id" id="category_id" class="form-select" wire:model="category_id">
                                  <option value="" selected>Choose Category</option>
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                              @error('category_id') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-2">
                              <label for="brand_id" class="label-control">Brand <b class="text-danger">*</b></label>
                              <select name="brand_id" id="brand_id" class="form-select" wire:model="brand_id">
                                  <option value="" selected>Choose Brand</option>
                                  @foreach($brands as $brand)
                                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                                  @endforeach
                              </select>
                              @error('brand_id') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-12">
                              <label for="brand_id" class="label-control">Short Description <b class="text-danger">*</b></label>
                              <input type="text" name="short_description" id="short_description" class="form-control" wire:model="short_description">
                              @error('short_description') <span class="text-danger">{{$message}}</span>@enderror
                          </div>
                          <div class="col-md-12">

                              <div class="form-group" wire:ignore>
                                  <label class="label-control">Product Description <b class="text-danger">*</b></label>
                                  <textarea id="description" class="form-control" name="description" wire:model="description"></textarea>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="label-control">Product Front Side Photo <b class="text-danger">*</b></label>
                                  <input type="file" name="new_front_image" id="new_front_image" class="form-control" wire:model="new_front_image">
                                  @error('new_front_image') <span class="text-danger">{{$message}}</span>@enderror
                                  @if($new_front_image)
                                  <img src="{{$new_front_image->temporaryurl()}}" width="120" alt="">
                                  @else
                                  <img src="{{asset('assets/images')}}/{{$front_image}}" width="120" alt="">
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="label-control">Product Back Side Photo</label>
                                  <input type="file" name="new_back_image" id="new_back_image" class="form-control" wire:model="new_back_image">
                                  @if($new_back_image)
                                  <img src="{{$new_back_image->temporaryurl()}}" width="120" alt="">
                                  @else
                                  <img src="{{asset('assets/images')}}/{{$back_image}}" width="120" alt="">
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="label-control">Product Gallery </label>
                                  <input type="file" multiple name="gallery" id="gallery" class="form-control" wire:model="new_gallery">
                                  @if($new_gallery)
                                  @foreach($new_gallery as $image)
                                  @if($image)
                                  <img src="{{$image->temporaryurl()}}" width="120" alt="">
                                  @endif
                                  @endforeach
                                  @else
                                  @php
                                  $images=explode(',',$gallery);
                                  @endphp
                                  @foreach($images as $image)
                                  @if($image)
                                  <img src="{{asset('assets/images')}}/{{$image}}" width="120" alt="">
                                  @endif
                                  @endforeach

                                  @endif
                              </div>
                          </div>
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-success pull-right">Submit</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

      </div>
      <div class="ad-footer-btm">
          <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
      </div>
  </div>
  @push('scripts')
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
      $(function() {

          tinymce.init({
              selector: '#description',
              setup: function(editor) {
                  editor.on('Change', function(e) {
                      tinyMCE.triggerSave();
                      var d_data = $('#description').val();
                      @this.set('description', d_data);
                  });
              }
          });
      });
  </script>
  @endpush
