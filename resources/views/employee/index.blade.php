{{-- @dd($employees) --}}
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
      <h1 class="mb-5">{{ $title }}</h1>
    </div>

    <div class="row mb-2">
      <div class="col-lg-5">
        <a href="/employee/create" class="btn btn-primary mb-1">Add Employee</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
          <table class="table table-bordered table-striped" id="tableEmployee">
            <thead>
              <th>No</th>
              <th>Employee ID</th>
              <th>Employee Name</th>
              <th>Department</th>
              <th>Position</th>
              <th>Office Location</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>
              @if ($employees->count())
                @foreach ($employees as $employee)
                <tr>
                  <td>
                    {{ $loop->iteration }}  
                  </td>  
                  <td>
                    {{ $employee->no }}  
                  </td>  
                  <td>
                    {{ $employee->name }}  
                  </td>  
                  <td>
                    {{ $employee->department->name }}  
                  </td>  
                  <td>
                    {{ $employee->position->name }}  
                  </td>  
                  <td>
                    {{ $employee->office->name }}  
                  </td>  
                  <td>
                    @if ($employee->status == 1)
                        Active
                    @else
                        Not Active
                    @endif
                  </td> 
                  <td>
                    <a href="/employee/{{ $employee->id }}/edit" class="badge bg-warning text-decoration-none">Edit</i></a>  
                    <form action="/employee/{{ $employee->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>  
                </tr>
                @endforeach  
              @else
              <tr>
                <td colspan="7" class="text-center">There is no data available at the moment.</td>
              </tr>
              @endif
            </tbody>
          </table>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script type="text/javascript" src="{{ URL::asset ('js/employee/script.js') }}"></script>
@endpush