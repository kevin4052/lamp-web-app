@extends('layouts.main') 
@section('page-title', 'Upload Photo')
@section('content')
<div class="container col-md-6 text-center">
    <div class="rounded bg-white mt-5 mb-5">
        <h1>Upload Photo</h1>
        <div class="mt-30">
            <form method="POST" enctype="multipart/form-data" action="{{ route('auth.photos.store', ['id' => $user->id]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="Address">
                        Profile image
                    </label>
                    <input type="file" name="image" />
                    <button type="submit" class="btn btn-primary btn-color">
                        Save image
                    </button>
                    @error('image')
                        <div class="error-sub-text">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
