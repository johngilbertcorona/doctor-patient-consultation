@extends('main')
@section('body')
<h1>Welcome {{ auth()->user()->fname }} you are a patient!</h1>
<a href="{{ route('logout') }}">Logout</a>


@endsection
