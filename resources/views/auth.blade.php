<!DOCTYPE html>
<html>

<head>
    <title>SignUp and Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kalam&family=Montserrat:wght@400;800&family=Source+Sans+Pro:ital,wght@1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="nav-menu ">
    <ul>
        <li class="active"><a href="{{ route('home') }}" style="color: aliceblue;">Go Back</a></li>
    </ul>
</nav><!-- .nav-menu -->

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <input type="text" name="name" :value="old('name')" required autofocus placeholder="Full name" />
            <input type="email" name="email" :value="old('email')" required  placeholder="Email e.g. faraz@mail.com" />
            <input type="password" name="password" required autocomplete="new-password"  placeholder="Password" />
            <input type="password" name="password_confirmation" required  placeholder="Confirm password" />
            <input type="text" name="socname" required  placeholder="Name of your Society" />
            <input type="text" name="socaddress" required  placeholder="Address of your Society" />
            <button type="submit" class="signin">{{ __('Register') }}</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form  method="POST" action="{{ route('signin') }}">
            @csrf
            <h1>Sign in</h1>
            <input type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
            <input type="password" name="password" required autocomplete="current-password"  placeholder="Password" />
            <button type="submit" class="signin">{{ __('Login') }}</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost signin" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript ">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>

