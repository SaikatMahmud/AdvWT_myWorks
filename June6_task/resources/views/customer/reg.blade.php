<!DOCTYPE html>
<html lang="en">
<head>
       <title>Registration</title>
</head>
<body>
    <form method="post" action="">
        {{@csrf_field()}}

        Mobile: <input type="text" name="mobile" placeholder="Mobile No" value="{{old('mobile')}}"><br>
        @error('mobile')
            {{$message}}<br>
        @enderror

        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Dob: <input type="date" name="dob"><br>
        @error('dob')
            {{$message}}<br>
        @enderror

        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror

        Confirm Password: <input type="password" name="confirmPass"><br>
        @error('conFirmPass')
            {{$message}}<br>
        @enderror

        Email: <input type="text" name="email" placeholder="Email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}} <br>
        @enderror

        <input type="submit" value="Create">
    </form>
</body>
</html>
