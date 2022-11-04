{{-- @dd($assigns) --}}
@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mb-5">{{ $title }}</h1>

                    
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Employee Name</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Extension No</th>
                        </tr>
                        @foreach ($assigns as $assign)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $assign->employee->name }}</td>
                          <td>{{ $assign->employee->department_id }}</td>
                          <td>{{ $assign->employee->position_id }}</td>
                          <td>{{ $assign->extension->no }}</td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
@endsection