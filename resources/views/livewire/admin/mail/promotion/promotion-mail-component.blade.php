@push('styles')
<style>
    .ck-editor__editable {
    background-color: transparent !important;
}
</style>
@endpush
<div class="main-content" wire:ignore>
    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Promotion Mail</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{route('admin.add_subscribe_mail')}}">
                                <span class="icon-menu feather-ico">
                                  <i class="fa fa-message"></i>
                                </span>
                                Add subscribe Mail</a>
                        </li>
                        <li class="breadcrumb-link">
                            <a href="{{route('admin.dashboard')}}">
                                <span class="icon-menu feather-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </span>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-link active">Basic Table</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="from-wrapper">
       <div class="card">
        <div class="card-body">
            <form  wire:submit.prevent="sendEmails">
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="email" class="label-control">Select Emails</label>

                         <select name="emails[]" id="emails" class="sel_mail form-control" multiple="multiple" wire:model="emails">
                            <option value="">Select Emails</option>
                            @foreach($mails as $mail)
                            <option value="{{$mail->id}}">{{$mail->email}}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject here..." wire:model="subject">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="mailContent" id="mailContent"  cols="30" rows="10" placeholder="Mail Content here..." wire:model="mailContent"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">

                          <button type="submit" class="btn btn-success">Send Email</button>
                      </div>
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
    ClassicEditor
        .create( document.querySelector( '#mailContent' ), {
            ckfinder: {
                options: {
                    skin: 'moono-lisa',
                    backgroundColor: 'rgb(0,0,0)'
                }
            }
        } )
        .then( editor => {
            editor.model.document.on('change:data', (e) => {
                @this.set('mailContent', editor.getData());
            });
        })
        .catch( error => {
            console.error( error );
        });

    $(document).ready(function(){
        $('.sel_mail').select2();
        $('.sel_mail').on('change',function(e){
            var data=$('.sel_mail').select2("val");
            @this.set('emails',data);
        });
    });
</script>
@endpush

