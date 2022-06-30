@extends((!session()->has('loggedCustomer') ? 'layouts.beforeLogin' : 'layouts.afterLogin'))
@if (session()->has('loggedCustomer'))
@php $user=session()->get('loggedCustomer'); @endphp
@endif
@section('content')
<div style="text-align: right;">
    <form method="get" action="{{route('search.result')}}">
        <input type="text" name="search" placeholder="Search here" value="">
        <input type="submit" value="search">
    </form>
</div>
@error('stockOut')
{{$message}} <br>
@enderror
    <div>
        <p align="center"><b>Medicine details:</b></p>
        <table border="2" align="center" cellpadding="10" width="30%">
            <td>
        Name: {{$med->medicine_name}}<br><br>
        Genre: {{$med->genre}}<br><br>
        Brand: {{$med->Suppliers()->where('medicine_id',$med->medicine_id)->first()->Suppliers->supplier_name}}<br><br>
        Price: {{$med->price}} TK
        &emsp;&emsp;&emsp;&emsp; <button><a href="{{route('check.stock',['id'=>$med->medicine_id])}}">Buy now</a></button>
            </td>
        </table>
    </div>
    &nbsp;
    <div>
        <table border="1" align="center" cellpadding="10" width="40%">
            <td>
        Details:<br>{{$med->details}}<br>

            </td>
        </table>
    </div>
@endsection