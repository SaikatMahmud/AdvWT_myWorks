@extends('layouts.afterLogin')
{{-- @php $cus=Session::get('loggedCustomer'); @endphp --}}
@section('content')
<h4>{{Session::get('msg')}}</h4>
<form method="post" action="" enctype="multipart/form-data">
    {{@csrf_field()}}
    Name: <input type="text" name="name" value="{{$cus->customer_name}}"><br>
    @error('name')
    {{$message}} <br>
    @enderror
    
    Email: <input type="text" name="email" value="{{$cus->customer_email}}"><br>
    @error('email')
    {{$message}}<br>
    @enderror
    
    Mobile: <input type="text" name="mobile" value="{{$cus->customer_mob}}"><br>
    @error('mobile')
    {{$message}}<br>
    @enderror
    
    Address: <input type="text" name="address" value="{{$cus->customer_add}}"><br>
    @error('address')
    {{$message}}<br>
    @enderror
    <br>
    Upload profile pic-<input type="file" name='cus_pic'>
    @error('cus_pic')
        {{$message}}<br>
        @enderror
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
    <img src="{{asset('storage/cus_pic/10_Saikat cus_1656436989.jpg')}}" alt="profile pic" height="90px" width="100px">
@endsection