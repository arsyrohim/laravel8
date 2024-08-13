@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
        <form class="form-register" action="/login" method="post">    
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>          
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>       
          </form>
          <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
    </div>
</div>

</div>

@endsection