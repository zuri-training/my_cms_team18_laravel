<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forge - Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('signup-signin/style.css') }}">
</head>

<body>

    <div class="main">

        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('/signup-signin/Group 271.png') }}" alt=""></a>
            <p>We guarantee you the best template, to give your project the best impression</p>
            <img class="img1" src="{{ asset('signup-signin/Image.png') }}" alt="picture"><br>

            {{-- <button class="btn1"><a href="">Sign in with Google</a></button>
            <button class="btn2"><a href="">Sign in with Facebook</a></button> --}}
        </div>

        <form method="post" action="#" autocomplete="off" class="section">
            @csrf
            
            <h1 style="margin: auto">Sign in</h1>

            <div class="form">
                @include('includes.errors')
                @include('includes.status')
                
                <label for="email"><b>Email</b></label>
                <input type="text" name="email" id="email" value="{{old('email')}}" required><br>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="box">
                <input type="checkbox" id="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="checkbox"> Remember password</label>
                <p><a href="{{ route('password.request') }}">Forgot password? </a></p>

                <button class="btn3" style="color: white">Sign In</button>
            </div>

            <div class="account">
                <p> Not registered yet? </p>
                <p><a href="{{route('register')}}"> Create account </a></p>
            </div>

            <div class="para">
                <p>By signing in, you agree to our Terms of Use
                    and to receive Forge emails & updates and acknowledge
                    that you read our Privacy Policy</p>
            </div>
        </form>
    </div>

</body>
</html>