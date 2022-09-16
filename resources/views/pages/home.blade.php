@extends('layouts.main')

@section('title', 'web app home')

@section('content')
    <h1>Welcome {{ $user }}, {{ $age }}</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, laudantium?</p>
@endsection
