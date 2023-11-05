@push('styles')
<style>
    .ck-editor__editable {
    background-color: transparent !important;
}
</style>
@endpush
<div class="main-content" id="main">
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">SEO</h4>
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
                        <li class="breadcrumb-link">SEO</li>
                        <li class="breadcrumb-link active">Create</li>
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
                    <h5>Add New Page</h5>
                </div>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addSeo">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">Page Name <b class="text-danger">*</b></label>
                                <input type="text" name="page_name" id="page_name" class="form-control" wire:model="page_name">
                                @error('page_name') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">Title <b class="text-danger">*</b></label>
                                <input type="text" name="title" id="title" class="form-control" wire:model="title">
                                @error('title') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">Type <b class="text-danger">*</b></label>
                                <input type="text" name="type" id="type" class="form-control" wire:model="type">
                                @error('type') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label-control">URL <b class="text-danger">*</b></label>
                                <input type="text" name="url" id="url" class="form-control" wire:model="url">
                                @error('url') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" wire:ignore>
                                <label class="label-control">Description <b class="text-danger">*</b></label>
                                <textarea name="description" id="description" cols="30" rows="10" placeholder="Add description here..." wire:model="description"></textarea>
                                @error('description') <span class="text-danger">{{$message}}</span>@enderror
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
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<script>
    $(function() {

        ClassicEditor
        .create( document.querySelector( '#description' ), {
            ckfinder: {
                options: {
                    skin: 'moono-lisa',
                    backgroundColor: 'rgb(0,0,0)'
                }
            }
        } )
        .then( editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('description', editor.getData());
            });
        })
        .catch( error => {
            console.error( error );
        });
    });
</script>
@endpush
