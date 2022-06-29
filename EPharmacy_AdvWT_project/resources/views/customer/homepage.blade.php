
@extends((!session()->has('loggedCustomer') ? 'layouts.beforeLogin' : 'layouts.afterLogin'))
@if (session()->has('loggedCustomer'))
@php $user=session()->get('loggedCustomer'); @endphp    
@endif

@section('content')
<h1 align='center'><i> ``````Get medicine at your doorstep !``````</i></h1>
<form method="GET" action="">
<input type="text" name="search" placeholder="Search here" value="">
<input type="submit" value="search">

</form>
@endsection