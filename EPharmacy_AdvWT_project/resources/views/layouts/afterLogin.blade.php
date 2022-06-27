<html>
    <head></head>
    <body>
        <div>
            <a href="{{route('user.login')}}">Your Profile</a>
            ||&emsp;
            <a href="{{route('about')}}">About Us</a>
            ||&emsp;
            <button type="button"><a href="{{route('user.logout')}}">Logout</a></button>
            
        </div>
        <br>
        <div>
            @yield('content')
        </div>
    </body>
</html>