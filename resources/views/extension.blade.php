@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mb-5">{{ $title }}</h1>

                    @foreach ($phone_extensions as $phone_extension)
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="3">Department</td>
                        </tr>
                        <tr>
                            <th>{{ $phone_extension["name"] }}</th>
                            <th>{{ $phone_extension["position"] }}</th>
                            <th>{{ $phone_extension["extension"] }}</th>
                        </tr>
                    </table>
                    @endforeach
            </div>
        </div>
    </div>
@endsection