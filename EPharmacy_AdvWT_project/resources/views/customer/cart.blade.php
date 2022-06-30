@extends('layouts.afterLogin')

@section('content')
    @if (session()->has('cart'))
    <table border="1">
        <tr>
            <th>Medicine name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    @foreach(session()->get('cart') as $id=>$details)
    <tr>
        <td>{{$details['name']}}</td>
        <td><input type="number" name="quantity" value="{{$details['quantity']}}"></td>
        <td>{{$details['price']}} TK/pc</td>
    </tr>
    @endforeach
    </table>
    <button><input type="submit"></button>
        
    @endif
@endsection