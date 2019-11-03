@extends('layout')

@section('title', 'Create Guitar')


@section('content')
<form method="POST" action="{{ route('guitars.store') }}">
   @csrf
   <div class="form-group">
      <label for="guitar-title">Title</label>
      <input type="text" name="title" id="title" 
         class="form-control @error('title') is-invalid @enderror"
         value="{{ old('title') }}">
      @error('title')
         <div class="invalid-feedback">
            {{ $errors->first('title') }}
         </div>
      @enderror
   </div>
   <div class="form-group">
      <label for="make">Make</label>
      <input type="text" name="make" id="make" 
         class="form-control  @error('make') is-invalid @enderror"
         value="{{ old('make') }}">
   @error('make')
   <div class="invalid-feedback">
      {{ $errors->first('make') }}
   </div>
      @enderror
   </div>
   <div class="form-group">
      <label for="year">Year</label>
      <input type="text" name="year" id="year" 
         class="form-control  @error('year') is-invalid @enderror"
         value="{{ old('year') }}">
      @error('year')
      <div class="invalid-feedback">
         {{ $errors->first('year') }}
      </div>
      @enderror
   </div>
   <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" name="description" id="description" 
         class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
      @error('description')
      <div class="invalid-feedback">
         {{ $errors->first('description') }}
      </div>
      @enderror
   </div>
   <div class="form-group">
      <button class="btn btn-primary">Create Guitar</button>
   </div>
</form>
@endsection

@section('scripts')
<script>
   //alert('Hello!')
</script>
@endsection
