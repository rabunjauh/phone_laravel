@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-5">
        <h1>{{ $title }}</h1> 
      <form action="/department" method="post">
        @csrf
      <div class="mb-3">
        <label for="no" class="form-label">Department</label>
        <input type="text" class="form-control @error('no')is-invalid @enderror" id="no" name="no" value="{{ old('no') }}" placeholder="Employee No" required>
        @error('no')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="name" class="form-label">Department</label>
        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Department Name" required>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        @if(old('isActive') == "1")
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="isActive" name="isActive" value="1" checked>
          <label class="form-check-label" for="isActive">Active</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="isActive" name="isActive" value="0">
          <label class="form-check-label" for="isActive">Not Active</label>
        </div>
      </div>
      @elseif(old('isActive') == "0")
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="isActive" name="isActive" value="1">
        <label class="form-check-label" for="isActive">Active</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="isActive" name="isActive" value="0" checked>
        <label class="form-check-label" for="isActive">Not Active</label>
      </div>
    </div>
    @else
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="isActive" name="isActive" value="1" checked>
      <label class="form-check-label" for="isActive">Active</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="isActive" name="isActive" value="0">
      <label class="form-check-label" for="isActive">Not Active</label>
    </div>
  </div>
    @endif
      
      <div class="mb-3">
        <label for="department_id" class="form-label">Department</label>
        <select class="form-select" name="department_id">
          @foreach ($departments as $department)
            @if(old('department_id') == $department->id)
          <option value={{ $department->id }} selected>{{ $department->name }}</option>
          @else
          <option value={{ $department->id }}>{{ $department->name }}</option>
          @endif
          @endforeach
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="reset" class="btn btn-warning">Reset</button>
      <a href="/department" class="btn btn-info ms-auto">Back</a>
    </div>
      </form>
  </div>
</div>
@endsection