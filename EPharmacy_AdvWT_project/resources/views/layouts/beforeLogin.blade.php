<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('user.login')}}">Login</a>
            ||
            <a href="{{route('user.reg')}}">Register</a>
            ||
            <a href="{{route('about')}}">About Us</a>
        </div>
        <br>
        <div>
            @yield('content')
        </div>
    </body>
</html>