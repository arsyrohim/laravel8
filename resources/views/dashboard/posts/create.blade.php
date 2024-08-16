@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create My Post </h1>        
  </div>
  
  <div class="col-lg-8">
    <form method="post" action="/dashboard/posts">
      @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" disabled readonly>
          </div>
          <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}"> {{ $category->nama }} </option>
              @endforeach              
            </select>
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <input id="body" type="hidden" name="content">
           <trix-editor input="body"></trix-editor>
          </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
  </div>

  <script>
    const title = document.querySelector('#title') ;
    const slug = document.querySelector('#slug') ;

    title.addEventListener('change' , function(){
           let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
    })

    document.addEventListener('trix-file-accept' , function(e) {
      e.preventDefault()
    })
  </script>
@endsection