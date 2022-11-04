@dd($departments)
@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mb-5">{{ $title }}</h1>

                    <table class="table table-bordered">
                        <thead>
                          <th>No</th>
                          <th>Department Description</th>
                          <th>Status</th>
                          <th>Group</th>
                        </thead>
                        <tbody>
                          @foreach ($departments as $department)
                            <td>
                              {{ $loop->iteration }}  
                            </td>  
                            <td>
                              {{ $department->description }}  
                            </td>  
                            <td>
                              {{ $department->status_active }}  
                            </td>  
                            <td>
                              {{ $department->group_id }}  
                            </td>  
                          @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection