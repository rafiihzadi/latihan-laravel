@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap aling-items-center pt-3 pb-2 
mb-3 border-bottom">
<h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
<form method="post" action="/dashboard/posts">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" 
    name="title">
    @error('title')
    <div class="invalid-feeback">
        {{ $message }}
    </div>
    enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" 
    name="slug">
    @error('slug')
    <div class="invalid-feeback">
        {{ $message }}
    </div>
    enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"> {{$category->name}}</option>
        @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
    <p>{{ $message }}<p>
        @enderror 
    <input id="x" type="hidden" name="body">
    <trix-editor input="body"></trix-editor>
  </div>
 <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){ 
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)

    });

    document.addEventListener('trix-file-accept', function(e){
        e.prevenDefault();
        })
</script>
@endsection