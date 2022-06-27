@extends('layouts.afterLogin')
@php $cus=Session::get('loggedCustomer'); @endphp
@section('content')
<h4>{{Session::get('msg')}}</h4>
<form method="post" action="">
    {{@csrf_field()}}
    Name: <input type="text" name="name" value="{{$cus->customer_name}}"><br>
    @error('name')
    {{$message}} <br>
    @enderror
    <br>
    Email: <input type="text" name="email" value="{{$cus->customer_email}}"><br>
    @error('email')
    {{$message}}<br>
    @enderror
    <br>
    Mobile: <input type="text" name="mobile" value="{{$cus->customer_mob}}"><br>
    @error('mobile')
    {{$message}}<br>
    @enderror
    <br>
    Address: <input type="text" name="address" value="{{$cus->customer_add}}"><br>
    @error('address')
    {{$message}}<br>
    @enderror

    <input type="submit" value="Save">
</form>
@endsection