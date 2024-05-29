
@extends('layouts.main')
@section('container')
<article mt-5>
    <h2>{{ $post->title }}</h2>
    <p>By  <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->nama }} </a></p>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}
</article>
<a href="/blog" class="mt-3">Kembali</a>
@endsection