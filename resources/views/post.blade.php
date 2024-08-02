
@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
                <div class="input-group mb-3">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                    <button class="btn btn-danger" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title">
                <a href="/postd/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                {{ $posts[0]->title }}</a>
            </h5>
            <small class="text-muted">
            <p>By <a href="/blog?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->nama }} </a>
                {{  $posts[0]->created_at->diffForHumans()}}
            </small>
            </p>
            <p class="card-text">{{$posts[0]->excerpt}}</p>
            <a href="/postd/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
            </div>
        </div>
  
        <div class="container">
            <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">                   
                    <div class="card" >
                        <div class="position-absolute px-3 py-2 " style="background-color :rgb(0,0,0,0,0.7)"><a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->nama }}</a> </div>
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{$post->category->nama}}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <small class="text-muted">
                            <p>By <a href="/blog?author={{ $post->user->username }}">{{ $post->user->name }}</a> 
                                {{  $post->created_at->diffForHumans()}}
                            </small>
                          <p class="card-text">{{ $post->excerpt }}</p>
                          <a href="/postd/{{ $post->slug }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>                      
            @endforeach
            </div>
        </div>  

        @else
        <p class="text-center fs-4">Halaman tidak ada</p> 
     @endif
    <div class="d-flex  justify-content-end ">
     {{ $posts->links() }}
    </div>
@endsection


