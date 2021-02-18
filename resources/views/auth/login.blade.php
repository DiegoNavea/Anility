<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../../css/signin2.css" type="text/css" />
</head>

<body>
    <header>
        <a class="logo" href="#"> <img src="https://img.icons8.com/dotty/40/ffffff/business-network.png" />Credcon</a>
    </header>
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('login') }}" method="post" name="sign_in_form">
        @csrf
        <div class="header-signin">
            <p><strong>SIGN IN</strong></p>
        </div>
        <div class="fade_rule"></div><br>
        <div>
            <label class="label" value="{{ __('Email') }}"> Email </label> <br>
            <input id="email" type="email" class="button" name="email" :value="old('email')" required autofocus><br>
            <label class="label" value="{{ __('Password') }}"> Password </label> <br>
            <input id="password" type="password" class="button" name="password" required
                autocomplete="current-password"><br>
            <input type="submit" class="button" id="submit" value="SIGN IN"><br>
        <!--    <x-jet-button class="button">
                    {{ __('Login') }}           TENGO QUE APLICAR ESTO ARRIBA
                </x-jet-button>
        -->
        </div>
        <div class="optional">
            @if (Route::has('password.request'))
                <a class="footerhover" href="{{ route('password.request') }}">Forgot password?</a>
                <span id="space"></span>
            @endif
        </div>
        <div class="footer">
            <p>New here? <span><a class="footerhover" href="{{ route('register') }}">Sign up</a></span></p>
        </div>
    </form>
</body>

</html>
