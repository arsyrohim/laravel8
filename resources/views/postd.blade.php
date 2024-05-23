
@extends('layouts.main')
@section('container')
<article mt-5>
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}
</article>
<a href="/blog">Kembali</a>
@endsection