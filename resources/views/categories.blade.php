
@extends('layouts.main')
@section('container')
<h2>Category Post</h2>
    @foreach ($categories as $category)
    <ul>
        <li>
         <h2><a href="/categories/{{ $category->slug }}"><h2>{{ $category->nama }}</a></h2>
        </li>
    </ul>          
        
    @endforeach
@endsection


