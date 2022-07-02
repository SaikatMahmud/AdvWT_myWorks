@extends('layouts.afterLogin')
@section('content')
<h2 align="center">Online Pharmacy Project</h2>
<p align="center">Invoice of order <i>#{{$order->order_id}}</i></p>

<div align="left"><b>Customer Name:</b> {{$order->Customers->customer_name}}<br>
    <b>Mobile:</b> {{$order->Customers->customer_mob}}<br>
    <b>Address:</b> {{$order->Customers->customer_add}}
</div><br>
<div align="left"><b>Order status:</b> {{$order->status}}<br>
    <b>Order placed:</b> {{$order->created_at->format("d/m/y, h:m:sa")}}
</div>

<div>

    <div style="text-align: right;">
        <b>Medicine details:</b><br>
        <hr>
        @foreach ($order->Medicines as $med)
        {{$med->medicine_name}}&emsp; &times; {{$med->pivot->quantity}} pc<br>
        @endforeach
        <hr width="20%" align="right">
        <b>Total:</b> {{$order->amount}} TK
        <div>
            <br>
        </div>
        @endsection