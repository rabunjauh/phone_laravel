@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-5">
        <h1>{{ $title }}</h1> 
      <form action="/department/{{ $department->id }}" method="post">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Department</label>
        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name', $department->name) }}" placeholder="Department Name" required>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      
      <div class="mb-3">
        @if(old('isActive', $department->isActive) == "1")
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="isActive" name="isActive" value="1" checked>
          <label class="form-check-label" for="isActive">Active</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" id="isActive" name="isActive" value="0">
          <label class="form-check-label" for="isActive">Not Active</label>
        </div>
      </div>
      @elseif(old('isActive', $department->isActive) == "0")
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
        <label for="name" class="form-label">Groups</label>
        <select class="js-example-basic-single form-select" name="group_id">
          @foreach ($groups as $group)
            @if(old('group_id', $department->group_id) == $group->id)
          <option value={{ $group->id }} selected>{{ $group->name }}</option>
          @else
          <option value={{ $group->id }}>{{ $group->name }}</option>
          @endif
          @endforeach
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">Update</button>
      <button type="reset" class="btn btn-warning">Reset</button>
      <a href="/department" class="btn btn-info ms-auto">Back</a>
    </div>
      </form>
  </div>
</div>
@endsection

@push('script')
  <script type="text/javascript" src="{{ URL::asset ('js/department/script.js') }}"></script>
@endpush