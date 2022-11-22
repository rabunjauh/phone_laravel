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
        <a href="/department/create" class="btn btn-primary mb-1">Add Department</a>
      </div>
    </div>
      
    <div class="row mt-2">
      <div class="col-lg-12">
        <table class="table table-striped" id="tableDepartment">
          <thead>
            <tr>
            <th>No</th>
            <th>Department Name</th>
            <th>Status</th>
            <th>Group</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if ($departments->count())
              @foreach ($departments as $department)
              <tr>
                <td>
                  {{ $loop->iteration }}  
                </td>  
                <td>
                  {{ $department->name }}  
                </td>  
                <td>
                  @if ($department->isActive == "1")
                    {{ 'Active' }}
                  @else
                    {{ 'Not Active' }}
                  @endif
                </td>  
                <td>
                  {{ $department->group->name }}  
                </td> 
                <td>
                  <a href="/department/{{ $department->id }}/edit" class="badge bg-warning text-decoration-none">Edit</i></a>  
                  <form action="/department/{{ $department->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td> 
              </tr>
              @endforeach  
            @else
            <tr>
              <td colspan="4" class="text-center">There is no data available at the moment.</td>
            </tr> 
            @endif
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script type="text/javascript" src="{{ URL::asset ('js/department/script.js') }}"></script>
@endpush