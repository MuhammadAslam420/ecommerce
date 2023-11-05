<!DOCTYPE html>
<html>
<head>
    <title>3azone.com</title>
</head>
<body>
    @php
    $mail=DB::table('email_subscribes')->where('status','active')->first();
    @endphp

    <p>{{$mail->subject}}</p>

    {!! $mail->message !!}

    <p>Thank you</p>
    <p>{{$mail->from}}</p>
</body>
</html>
