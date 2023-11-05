             @php
              $categories=DB::table("categories")->get();
              @endphp
              <div class="search-style-2">
                    <form  method="get" action="{{ route('search') }}">
                        <select class="select-active" name="category_id" wire:model="category_id">
                            <option>All Categories</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                        <input type="search" name="search" placeholder="Search for items..." wire:model="search">
                        <button type="submit"><i class="fa fa-search"></i></button>

                    </form>
                </div>