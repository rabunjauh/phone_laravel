@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-5">
        <h1>{{ $title }}</h1> 
      <form action="/addUser" method="post">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Username</label>
        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Username" required>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">Add User</button>
      <button type="reset" class="btn btn-warning">Reset</button>
      <a href="/user" class="btn btn-info ms-auto">Back</a>
    </div>
      </form>
  </div>
</div>
@endsection