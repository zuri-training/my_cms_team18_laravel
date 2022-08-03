<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forge - Sign Up</title>

    <link rel="stylesheet" href="{{ asset('signup-signin/style.css') }}">
</head>

<body>

    <div class="main">

        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('/signup-signin/Group 271.png') }}" alt=""></a>
            <p>We guarantee you the best template, to give your project the best impression</p>
            <img class="img1" src="{{ asset('signup-signin/Image 2.png') }}" alt="picture"><br>

            {{-- <button class="btn1"><a href="">Sign in with Google</a></button>
            <button class="btn2"><a href="">Sign in with Facebook</a></button> --}}
        </div>



        <form method="post" action="#" autocomplete="off" class="section">
            @csrf
            <h1>Sign Up</h1>

            <div class="form">
                
                @include('includes.errors')

                <label for="name"><b>Name</b></label>
                <input type="text" name="name" id="name" value="{{old('name')}}" required><br>

                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" value="{{old('email')}}" required><br>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" required><br/>

                <label for="password_confirmation"><b>Confirm password</b></label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>

                <button class="btn3" style="color: white">Sign Up</button>
            </div>

            <div class="account">
                <p> Already have an account? </p>
                <p><a href="{{route('login')}}"> Log In </a></p>
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
