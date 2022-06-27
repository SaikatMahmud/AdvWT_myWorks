@extends((!session()->has('loggedCustomer') ? 'layouts.beforeLogin' : 'layouts.afterLogin'))
@section('content')
@if(!Session::has('loggedCustomer'))
<h4>{{Session::get('msg')}}</h4>
<form method="post" action="">
    {{@csrf_field()}}
    Email: <input type="text" name="email" placeholder="Enter email" value="{{old('email')}}"><br>
    @error('email')
    {{$message}} <br>
    @enderror
    Password: <input type="password" name="password" ><br>
    @error('password')
    {{$message}}<br>
    @enderror

    <input type="submit" value="Login">
</form>

    @error('notFound')
    {{$message}}<br>
    @enderror

    @else
    <h3>You are already logged in</h3>
    <h4>Go to home <a href="{{route('home')}}">Home</a></h4>

@endsection
@endif
