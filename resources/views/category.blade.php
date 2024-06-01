@dd($posts)
@extends('layouts.main')
@section('container')
<h2>Category {{ $title }}</h2>
    @foreach ($posts as $post)
        <article mt-5>
            <a href="/postd/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>            
            <h5>By :  {{ $post->user->name }} </h5>
            <p>{{ $post->excerpt }}</p>
        </article>
        
    @endforeach
@endsection


