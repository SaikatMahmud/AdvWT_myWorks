
@extends((!session()->has('loggedCustomer') ? 'layouts.beforeLogin' : 'layouts.afterLogin'))
@if (session()->has('loggedCustomer'))
@php $user=session()->get('loggedCustomer'); @endphp    
@endif
@section('content')
your id 
@endsection