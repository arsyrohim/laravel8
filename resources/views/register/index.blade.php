@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <h1 class="h3 mb-3 font-weight-normal text-center">Registation Form</h1>
        <form class="form-register" action="/register" method="post">   
            @csrf
            <label for="name" class="sr-only">Name</label>
            <input type="text" id="name" name="name" class="form-control rounded-top" placeholder="Name" > 

            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username"> 

            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" >

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control rounded-bottom" placeholder="Password">          
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>       
          </form>
          <small class="d-block text-center mt-3">already registered? <a href="/login">Login</a></small>
    </div>

@endsection