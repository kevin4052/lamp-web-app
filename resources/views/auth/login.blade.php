@extends('layouts.main') 

@section('page-title', 'login') 

@section('content')
<div class="form-signin w-100 m-auto text-center">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Login</h1>    
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
          <label for="email">Email Address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required autocomplete="current-password">
          <label for="password">Password</label>
        </div>
        <!-- Remember Me -->
        <div class="block mt-1 mb-1">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="block mt-1 mb-1">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    </form>
    <p>Don't have an account? <a href="/register">Signup</a></p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
