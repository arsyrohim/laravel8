
@extends('layouts.main')
@section('container')
<h2 class="mb-5">Category Post</h2>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://media.istockphoto.com/id/1646501115/id/foto/closeup-pria-muda-asia-pengembang-perangkat-lunak-mentor-pemimpin-manajer-berbicara-dengan-tim.jpg?s=1024x1024&w=is&k=20&c=2E2jjx1HeBKdDnfYgP9Ok_rYQ8RKiWuWe73obeQmXtc=" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->nama }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection


