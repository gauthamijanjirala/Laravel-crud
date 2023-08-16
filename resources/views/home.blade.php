@extends('layouts.app')

@section('content')

<h1>Home : {{ Auth::user()->email }}</h1>

@endsection
