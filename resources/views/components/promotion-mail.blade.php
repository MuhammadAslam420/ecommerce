<div class="col-md-6">
    <div class="form-group">
        <label for="email" class="label-control">Select Emails</label>
        <select name="emails" id="emails" class="form-control" multiple wire:model="emails">
            <option value="">Select Emails</option>
            @foreach($mails as $mail)
            <option value="{{$mail->id}}">{{$mail->email}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <button type="submit" class="btn btn-success">Send Email</button>
    </div>
</div>
