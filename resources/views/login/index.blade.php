@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
        <form class="form-register" action="/login" method="post">  
         @csrf
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email address" required autofocus>
            @error('email')
            <div  class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password @error('password') is-invalid @enderror" class="form-control" placeholder="Password" required>          
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>       
          </form>
          <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
    </div>
</div>

</div>

@endsection