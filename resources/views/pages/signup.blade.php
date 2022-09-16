@extends('layouts.landing') 

@section('page-title', 'signup') 

@section('content')
<div class="form-signin w-100 m-auto text-center">
    <form action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">Signup</h1>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="John">
            <label for="floatingInput">First Name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" placeholder="Doe">
            <label for="floatingInput">Last Names</label>
        </div>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
      </form>
</div>
@endsection
