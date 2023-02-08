@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

    @if(session()->has('seccess'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('success')}}
<main class="form-signin">
<h1 class="h3 mb-3 fw-normal" text-center> Please login</h1>
<form>
<div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" 
    placeholder="name@example.com">
    <label for="floatingInput"> email <address</label>
</div>
<div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" 
    placeholder="Password">
    <label for="floatingPassword">Password</label>
</div>

<buttom class="w-100 btn btn-lg btn-primary" type="sumbit">Login</button>
</form>
<small class="d- block text-center mt-3">Not registered? <a href="/
register">Register Now!</a></small>
</main>
</div>
</div>


@endsection