@extends('layouts.main')
@section('container')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-5">
      <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1> 
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
            <label for="name">Username</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
      </main>    
    </div>
  </div>
</div>
@endsection