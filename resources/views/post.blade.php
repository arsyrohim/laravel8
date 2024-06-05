
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->nama }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title">
                <a href="/postd/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                {{ $posts[0]->title }}</a>
            </h5>
            <small class="text-muted">
            <p>By <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->nama }} </a>
                {{  $posts[0]->created_at->diffForHumans()}}
            </small>
            </p>
            <p class="card-text">{{$posts[0]->excerpt}}</p>
            <a href="/postd/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
            </div>
        </div>
    @else
       <p class="text-center fs-4">Halaman tidak ada</p> 
    @endif
        <div class="container">
            <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">                   
                    <div class="card" >
                        <img src="https://source.unsplash.com/500x400/?{{ $post->category->nama }}" class="card-img-top" alt="{{$post->category->nama}}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <small class="text-muted">
                            <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> 
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
  
@endsection


