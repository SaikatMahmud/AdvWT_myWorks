@extends('layouts.afterLogin')
@php $user=session()->get('loggedCustomer'); @endphp

@section('content')
<h3>Your order has been placed.</h3>
Total amount <b>{{$amount}}</b>  TK. <br> <br>&emsp; Click here to see your orders.
@endsection