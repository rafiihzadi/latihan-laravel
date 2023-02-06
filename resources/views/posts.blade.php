@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
   <div class="col-md-6">
      <form action="{{ url('/blog') }}">
         @if (request('category'))
         <input type="hidden" name="category" value="{{ request('category') }}">
         @endif
         @if (request('author'))
         <input type="hidden" name="author" value="{{ request('author') }}">
         @endif
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search..." name="search">
  <button class="btn btn-danger" type="submit" >Search</button>
</div>
 </div>
</div>



<div class="card mb-3">
  
  <div class="card-body text-center">
   
    <p>
    <small class="text-muted">  
    By.
    </small>
   </p>


    
  </div>
</div>
<div class="container">
   <div class="row">
      
      <div class="col-md-4 mb-3">
      <div class="card">
         <div class= "position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">
         
    <div class="card-body">
    <h5 class="card-title">Test</h5>
    <p>
    <small class="text-muted">  
    By.
    </small>
   </p>
    <p class="card-text">Test</p>
    <a href="" class="btn btn-primary">Read more</a>
  </div>
</div>
</div>

    </div>
    </div>


<p> class="text-center fs-4">No post found.</p>


<div class="d-flex justify-content-end">

    </div>

@endsection
