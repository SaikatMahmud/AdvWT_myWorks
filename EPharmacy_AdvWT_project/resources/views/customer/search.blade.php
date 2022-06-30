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
@foreach ($results as $med)
<table border="1" align="center" cellpadding="10" width="40%">
    <td>
        Name: {{$med->medicine_name}}<br>
        Genre: {{$med->genre}}<br>
        Brand: {{$med->Suppliers()->where('medicine_id',$med->medicine_id)->first()->Suppliers->supplier_name}} 
        &emsp;&emsp;&emsp; <button><a href="{{route('check.stock',['id'=>$med->medicine_id])}}">Buy now</a></button> <br>
        Details: <a href="{{route('med.details',['id'=>$med->medicine_id])}}">see more</a>...<br>
        Price: {{$med->price}} TK
    </td>
    &nbsp;
</table>
@endforeach
<br>
<div align="center">{{ $results->links() }}</div>
@endsection