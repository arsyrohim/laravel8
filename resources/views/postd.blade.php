
@extends('layouts.main')
@section('container')
<article mt-5>
    <h2>{{ $post->title }}</h2>
    <p>By Arif Abdurohim in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->nama }} </a></p>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}
</article>
<a href="/blog">Kembali</a>
@endsection