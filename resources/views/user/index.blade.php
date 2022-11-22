@extends('layouts.main')

@section('container')
  <div class="container mt-3">
    <div class="row">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="col-lg-12">
        <h1 class="mb-5">{{ $title }}</h1>
        <a href="/addUser" class="btn btn-primary mb-3">Add User</a>
        <div class="row">
          <div class="col-md-6">
            <form action="/user">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name = "search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit" id="search">Search</button>
              </div>
            </form>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <th>No</th>
            <th>User Name</th>
          </thead>
          <tbody>
            @if ($users->count())
              @foreach ($users as $user)
              <tr>
                <td>
                  {{ $loop->iteration }}  
                </td>  
                <td>
                  {{ $user->name }}  
                </td> 
              </tr> 
              @endforeach  
            @else
              <tr>
                <td colspan="2" class="text-center">There is no data available at the moment.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    {{ $users->links() }}
  </div>
@endsection