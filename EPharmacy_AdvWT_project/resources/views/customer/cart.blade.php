@extends('layouts.afterLogin')

@section('content')
@php
$subTotal=0;
@endphp
{{-- @if (session()->has('cart')) --}}
<div style="text-align: center;">
    <h3>Your cart</h3>
    <table border="1" align="center">
        <tr>
            <th>Medicine name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        @foreach($allCart as $cart) {{-- from Customer controller --}}
        <tr>
            <td>{{$cart->where('cart_id',$cart->cart_id)->first()->Medicines->medicine_name}}</td>
            <td>{{$cart->quantity}}</td>
            <td>{{($cart->quantity)*($cart->where('cart_id',$cart->cart_id)->first()->Medicines->price)}}</td>
            <td><button>Remove from cart</button></td>
        </tr>
        @php $subTotal +=($cart->quantity)*($cart->where('cart_id',$cart->cart_id)->first()->Medicines->price);@endphp
        @endforeach
    </table>
    Subtotal amount = <b>{{$subTotal}}</b> TK<br><br>
    <form method="post" action="{{route('place.order')}}">
        {{@csrf_field()}}
        <input type="hidden" name="subTotal" value="{{$subTotal}}">
        <button>Checkout</button>
    </form>

</div>


@endsection