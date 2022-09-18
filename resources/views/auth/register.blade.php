@extends('layouts.main')
@section('page-title', 'signup')

@section('content')
<div class="form-signin w-100 m-auto text-center">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

        <div class="form-floating">
            <input id="firstname" type="text" class="form-control" name="firstname" placeholder="John" value="{{old('firstname')}}" required autofocus>
            <label for="firstname">First Name</label>
            @error('firstname')
            <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Doe" value="{{old('lastname')}}" required autofocus>
            <label for="lastname">Last Name</label>
            @error('lastname')
            <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
    
        <div class="form-floating">
            <input id="email" type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}" required autofocus>
            <label for="email">Email Address</label>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input id="datepicker" type="date" class="form-control" max="{{(new \DateTime())->format('Y-m-d')}}" name="dob" id="floatingInput" value="{{old('dob')}}" required autofocus>
            <label for="datepicker">Date of Birth</label>
            @error('datepicker')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input id="password" type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required autocomplete="new-password"> 
            <label for="password">Password</label>
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-floating">
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" id="floatingPassword" placeholder="Password" required> 
            <label for="password_confirmation">Confirm Password</label>
        </div>
   
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    </form>
    <p>Already have an account? <a href="/login">Login</a></p>
</div>

@endsection

