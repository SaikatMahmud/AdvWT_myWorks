@extends((!session()->has('loggedCustomer') ? 'layouts.beforeLogin' : 'layouts.afterLogin'))
@if (session()->has('loggedCustomer'))
@php $user=session()->get('loggedCustomer'); @endphp
@endif

@section('content')
<div style="text-align: center;">
    <form method="get" action="{{route('search.result')}}">
        <input type="text" name="search" placeholder="Search here" value="">
        <input type="submit" value="search">
    </form>
</div>

@foreach ($results as $med)
<table border="1" align="center" cellpadding="10" width="40%">
    <td>
        Name:{{$med->medicine_name}}<br>
        Genre:{{$med->genre}}<br>
        Price: {{$med->price}}

    </td>
    &nbsp;
</table>
@endforeach
{{ $results->links() }}
@endsection