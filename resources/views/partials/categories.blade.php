@extends('layouts/main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ( $categories as $category )
        <div class="col-4"></div>
        <a href = "/posts?category={{ $category->slug }}">
        <div class="card bg-dark text-white">
  <img src="http://source>unsplash>com/500x500?{{$post->category->name}}" 
  class="card-img" alt="{{$category->name}}">
  <div class="card-img-overlay d-flex align-items-cente p-0">
    <h5 class="card-title text-center flex-fill p-4 fs-3 "  style="background-color: rgba
    (0,0,0,0.7)"> {{ $category->name }}</h5>
    </div>
</div>
    </div>
    @endforeach
</div>
</div>

@endsection