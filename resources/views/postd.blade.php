
@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>By  <a href="/blog?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}"> {{ $post->category->nama }} </a></p>
            
            <h5>{{ $post->author }}</h5>
            
            <img src="https://source.unsplash.com/500x400?{{ $post->category->nama }}" class="card-fluid" alt="{{$post->category->nama}}">

            <article class="my-3">
            {!! $post->body !!}
        </article>
        
             <a href="/blog" class="mt-3">Kembali</a>
        </div>
    </div>
</div>


@endsection