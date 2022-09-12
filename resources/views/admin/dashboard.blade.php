@extends('main')
@section('body')

<h1>Welcome {{ auth()->user()->fname }} you are a administrator!</h1>
<a href="{{ route('logout') }}">Logout</a>

@endsection
