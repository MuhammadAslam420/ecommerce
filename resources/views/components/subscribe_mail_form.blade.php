@push('styles')
<style>
    .ck-editor__editable {
    background-color: transparent !important;
}
</style>
@endpush
<div class="row">
    <h5 class="from-title mb-1">Subscribe Mail Info</h5>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <label for="member-name" class="col-form-label">Subscribe Mail From</label>
            <input class="form-control" type="text" placeholder="Enter Subscribe Mail From" name="from" wire:model="from">
            @error('from') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <label for="member-email" class="col-form-label">Subscribe Mail Subject</label>
            <input class="form-control" type="text" placeholder="Subscribe Mail subject" name="subject" wire:model="subject">
            @error('subject') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <label for="member-email" class="col-form-label">Subscribe Mail Link</label>
            <input class="form-control" type="text" placeholder="Subscribe Mail link" name="link" wire:model="link">
            @error('link') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            <label for="member-email" class="col-form-label">Subscribe Mail Status</label>
            <select name="status" id="status" class="form-control" wire:model="status" >
                <option value="">Select Status</option>
                <option value="active">Active</option>
                <option value="inactive">In-Active</option>
            </select>
            @error('link') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <textarea name="mail" id="mail" rows="10" cols="80"   class="form-control"  placeholder="Write Your Mail Here..." wire:model="mail"></textarea>
            @error('mail') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="form-group mb-0">
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>



@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#mail' ), {
            ckfinder: {
                options: {
                    skin: 'moono-lisa',
                    backgroundColor: 'rgb(0,0,0)'
                }
            }
        } )
        .then( editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('mail', editor.getData());
            });
        })
        .catch( error => {
            console.error( error );
        });
</script>

@endpush
