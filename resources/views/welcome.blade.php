@extends('layouts.main') 

@section('page-title', 'Welcome to Web App') 

@section('content')
<div class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto mt-5 flex-column">  
        <div role="main" class="inner cover">
            <h1 class="cover-heading">Welcom to Web App</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eligendi nisi, sed perspiciatis reprehenderit eum facilis beatae corporis quibusdam tempore!</p>
            <p class="lead">
                <a href="/register" class="btn btn-lg btn-primary">Signup</a>
            </p>
        </div>  
    </div>

</div>
@endsection