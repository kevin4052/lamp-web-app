@extends('layouts.main') 

@section('page-title', 'Profile') 

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <a href="{{ route('auth.photos.create') }}" class="rounded-circle mt-5">
                    @if (Auth::user()->photo_id)
                    <img class="profile-img rounded-circle" src="/img/{{ Auth::user()->photo->name }}">
                    @else
                    <img class="profile-img rounded-circle" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    @endif
                </a>
                <span class="font-weight-bold">{{ Auth::user()->lastname }}, {{ Auth::user()->firstname }}</span>
                <span class="text-black-50">{{ Auth::user()->role->name }}</span>
            </div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <form method="POST" action="{{ route('auth.profile.edit', ['id' => Auth::user()->id]) }}">
                    @csrf
                    @method('PUT')

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-3">
                            <label class="labels">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ Auth::user()->firstname }}" placeholder="first name">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="labels">Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ Auth::user()->lastname }}" placeholder="last Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth" value="{{ Auth::user()->dob->format('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

@endsection