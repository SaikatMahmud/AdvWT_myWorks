@extends('layouts.afterLogin')
@section('content')

<table border="1">
    <tr>
        <th>Serial</th>
        <th>Order Number</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($orders as $key=>$order)
    <tr>
        <td>{{$key}}</td>
        <td>{{$order->order_id}}</td>
        <td>{{$order->amount}}</td>
        <td>{{$order->status}}</td>
        <td>Cancel | Download</td>
    </tr>
    
@endforeach
</table>
@endsection