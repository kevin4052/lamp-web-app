@extends('layouts.main')
@section('page-title', 'signup')

@section('content')
<div class="form-signin w-100 m-auto text-center">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Signup</h1>

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
            <label for="lastname">Last Names</label>
            @error('lastname')
            <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
    
        <div class="form-floating">
          <input id="email" type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}" required autofocus>
          <label for="email">Email address</label>
          @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-floating">
            <input id="datepicker" type="date" class="form-control" name="dob" id="floatingInput" placeholder="d/m/y" required autofocus>
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

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="firstname" :value="__('First name')" />

                <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="lastname" :value="__('Last name')" />

                <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
