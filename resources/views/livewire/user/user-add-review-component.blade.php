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
            @if(Session::has('msg'))
            <div class="alert alert-warning text-dark">{{Session::get('msg')}}</div>
            @endif
            <div class="d-flex justify-content-between">
                <div><a href="/" class="btn btn-danger">Home</a></div>
                <div><a href="{{route('user.dashboard')}}" class="btn btn-danger">Dashboard</a></div>
            </div>
        </div>
        <div class="container pt-10">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="addReview">
                        <div class="form-inline">
                            <label for="star-1" class="label-control">One Star</label>
                            <input type="radio" name="ratting" id="ratting" value="1" style="width:32px;" wire:model="ratting">
                            <label for="star-1" class="label-control">Two Star</label>
                            <input type="radio" name="ratting" id="ratting" value="2" style="width:32px;" wire:model="ratting">
                            <label for="star-1" class="label-control">Three Star</label>
                            <input type="radio" name="ratting" id="ratting" value="3" style="width:32px;" wire:model="ratting">
                            <label for="star-1" class="label-control">Four Star</label>
                            <input type="radio" name="ratting" id="ratting" value="4" style="width:32px;" wire:model="ratting">
                            <label for="star-1" class="label-control">Five Star</label>
                            <input type="radio" name="ratting" id="ratting" value="5" style="width:32px;" wire:model="ratting">
                            @error('ratting') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="comment" class="label-control">Comments</label>
                            <textarea name="comment" id="comment" class="form-control" cols="30" rows="10" wire:model="comment"></textarea>
                            @error('comment') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger pull-right">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
