@extends('layouts.main') 

@section('page-title', 'Dashboard') 

@section('content')
<div class="container table-responsive-md mt-5">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('auth.profile', ['id' => $user->id]) }}">view profile</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
       

@endsection