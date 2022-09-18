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
                    @if ($user->photo_id)
                    <img class="profile-img rounded-circle" src="/img/{{ $user->photo->name }}">
                    @else
                    <img class="profile-img rounded-circle" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    @endif
                </a>
                <span class="font-weight-bold">{{ $user->lastname }}, {{ $user->firstname }}</span>
                <span class="text-black-50">{{ $user->role->name }}</span>
            </div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <form method="POST" action="{{ route('auth.profile.edit', ['id' => $user->id]) }}">
                    @csrf
                    @method('PUT')

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-3">
                            <label class="labels">First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" placeholder="first name">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="labels">Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" placeholder="last Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="Date of Birth" value="{{ $user->dob->format('Y-m-d') }}">
                        </div>
                    </div>
                    @if (Auth::user()->role->name == 'Administrator')
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Subscriber Rating</label>
                            <select id="rating" class="form-control" name="rating">
                                <option>Default select</option>
                                <option value="1" @selected(old('rating', $user->rating) == '1')>1</option>
                                <option value="2" @selected(old('rating', $user->rating) == '2')>2</option>
                                <option value="3" @selected(old('rating', $user->rating) == '3')>3</option>
                                <option value="4" @selected(old('rating', $user->rating) == '4')>4</option>
                                <option value="5" @selected(old('rating', $user->rating) == '5')>5</option>
                              </select>
                        </div>
                    </div>
                    @endif
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

@endsection