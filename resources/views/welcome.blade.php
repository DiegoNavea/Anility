<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/header1.css" type="text/css" />
    <link rel="stylesheet" href="css/landingpage.css" type="text/css" />
</head>

<body>
    <header class="header">
        <h1 class="logo"><a href="#">Credcon</a></h1>
        <ul class="main-nav">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/change-user-male.png" />
            <li><a class="signin-hover" href="{{ route('login') }}">Sign In </a> </li>
        </ul>
    </header>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">I like you</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Sing in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div>
            <label class="label0">My Document</label>
        </div>
        <form action="#" method="post" name="sign_in_form">
            <div>
                <p class="font">Get your financial heath check by uploading your most recent income statement and
                    balance sheet</p>
            </div>
            <div class="fade_rule">
            </div></br>
            <div>
                <p class="font1">For your financial data to be successfully assessed your statements must meet the
                    folowing criteria</p>
                <p class="font1"><img src="https://img.icons8.com/small/16/ffffff/checked-2--v1.png" />
                    Less than 6 month old, preferable more recent <br>
                    <img src="https://img.icons8.com/small/16/ffffff/checked-2--v1.png" />
                    Another requirement<br>
                    <img src="https://img.icons8.com/small/16/ffffff/checked-2--v1.png" />
                    Another requirement
                </p>
                <p class="font1">After you upload your documents, they will be evaluated by Credcon's financial
                    experts to create your financial health check. You will receive an email when your health check
                    is ready to view</p>
            </div>
        </form>
        <p class="label1"> By signing up you agree the Terms of Service and Privacy Policy.</p>
    </div>
    </div>
    </div>
</body>

</html>
