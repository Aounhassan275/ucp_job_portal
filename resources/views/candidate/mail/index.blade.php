<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate Verification Code</title>
</head>
<body>
    <h3>Copy Verification Code and Paste it On Reset Password Page</h3>
    <p>{{$verification}}</p>
    <p><a href="{{route('candidate.reset')}}">Reset Password</a></p>
</body>
</html>