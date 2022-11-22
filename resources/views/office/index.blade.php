@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mb-5">{{ $title }}</h1>

                    <table class="table table-bordered">
                        <thead>
                          <th>No</th>
                          <th>Group Name</th>
                        </thead>
                        <tbody>
                          @if ($offices->count())
                            @foreach ($offices as $office)
                            <tr>
                              <td>
                                {{ $loop->iteration }}  
                              </td>  
                              <td>
                                {{ $office->name }}  
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
    </div>
@endsection