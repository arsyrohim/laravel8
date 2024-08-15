@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3 ">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
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