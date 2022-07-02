@extends('layouts.afterLogin')
@section('content')
<h2 align="center">Online Pharmacy Project</h2>
<p align="center">Invoice of order <i>#{{$order->order_id}}</i></p>
{{-- <p align="left">Customer Name: <i>{{$order->Customers()->where('customer_id',$order->c_id)->first()->Customers->customer_name}}</i></p> --}}
<div align="left"><b>Customer Name:</b> {{$order->Customers->customer_name}}<br>
<b>Mobile:</b> {{$order->Customers->customer_mob}}<br>
<b>Address:</b> {{$order->Customers->customer_add}}</div><br>
<div align="left"><b>Order status:</b> {{$order->status}}<br>
<b>Order placed:</b> {{$order->created_at->format("d/m/y, h:m:sa")}}</div>
<div>
<table border="1" align="center">
@foreach ($order->Medicines as $med)
   <td> hi  {{$med->medicine_name}}<td?
@endforeach

</table>
<div>
<br>
    {{$order}}
@endsection