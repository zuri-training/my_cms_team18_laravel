<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forge - Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('signup-signin/style.css') }}">
</head>

<body>

    <div class="main">

        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('/signup-signin/Group 271.png') }}" alt=""></a>
            <p>We guarantee you the best template, to give your project the best impression</p>
            <img class="img1" src="{{ asset('signup-signin/Image 2.png') }}" alt="picture"><br>
        </div>



        <form method="post" action="{{ route('password.email') }}" autocomplete="off" class="section">
            @csrf

            <h1 style="margin: auto">Reset Password</h1>

            <div class="form">
                @include('includes.errors')
                @include('includes.status')

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" value="{{old('email')}}" required><br>

                <button class="btn3" style="color: white">Send Password Reset Link</button>
            </div>

            <div class="account">
                <p><a href="{{route('login')}}"> Back to Log In </a></p>
            </div>

        </form>
</body>

</html>
