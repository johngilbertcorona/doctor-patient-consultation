@extends('main')
@section('body')
<h1>Welcome {{ auth()->user()->fname }} you are a doctor!</h1>
<a href="{{ route('logout') }}">Logout</a>


@endsection
