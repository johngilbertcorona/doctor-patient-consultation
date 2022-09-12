@extends('main')
@section('body')
<h1>Welcome {{ auth()->user()->name }} you are a doctor!</h1>
<a href="{{ route('logout') }}">Logout</a>


@endsection