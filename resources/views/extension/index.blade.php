@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mb-5">{{ $title }}</h1>

                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Extension No</th>
                    </thead>
                    @if ($extensions->count())
										@foreach ($extensions as $extension)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $extension->no }}</td>
                    </tr>
                    @endforeach
                    @else
											<tr>
												<td colspan="7" class="text-center">There is no data available at the moment.</td>
											</tr>
                    @endif
                    </table>
            </div>
        </div>
    </div>
@endsection