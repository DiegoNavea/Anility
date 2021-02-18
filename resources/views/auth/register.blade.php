<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../../css/header1.css" type="text/css" />
    <link rel="stylesheet" href="../../css/signup1.css" type="text/css" />
</head>

<body>
    <header class="header">
        <h1 class="logo"><a href="#">Credcon</a></h1>
        <ul class="main-nav">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/change-user-male.png" />
            <li><a class="signin-hover" href="Credcon-Signin.php">Sign In </a> </li>
        </ul>
    </header>

    <form action="{{ route('register') }}" method="post" name="sign_in_form">
    @csrf
        <div class="header-signin">
            <p><strong>Create an account to get your free financial health check</strong></p>
        </div>

        <div class="fade_rule"></div><br>

        <div>
            <label class="label" value="{{ __('Name') }}"> Company name </label><br>
            <input id="name" type="text" class="button" :value="old('name')" required autofocus autocomplete="name">
        </div>
        <div>
            <label class="label" value="{{ __('Email') }}" > Email </label> <br>
            <input id="email" type="text" class="button" :value="old('email')" required><br>
        </div>
        <div>
            <label class="label" value="{{ __('Password') }}"> Password </label><br>
            <input type="password" class="button" id="password" required autocomplete="new-password"><br>
        </div>
        <div>
            <label class="label" value="{{ __('Confirm Password') }}"> Confirm Password </label><br>
            <input id="password_confirmation" type="password" class="button" name="password_confirmation" required autocomplete="new-password"><br>
        </div>
        <div>
            <input type="submit" class="button" id="submit" value="Create Free Account" >{{ __('Register') }}<br>
        </div>
        <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        <div class="footer">
            <p>Already have an account? <span><a class="footerhover" href="{{ route('login') }}">Sign in</a></span></p>
        </div>
    </form>

    <p class="label2"> By signing up, you agree to the Term of Service and Privacy Policy </p>

</body>

</html>
