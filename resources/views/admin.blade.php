@extends('main')
@section('body')

<h1>Welcome {{ auth()->user()->name }} you are a administrator!</h1>
<a href="{{ route('logout') }}">Logout</a>

@endsection