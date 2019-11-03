@extends('layout')

@section('title', 'Create Guitar')


@section('content')
<form method="POST" action="{{ route('guitars.store') }}">
   @csrf
   <div class="form-group">
      <label for="guitar-title">Title</label>
      <input type="text" name="title" id="title" class="form-control">
   </div>
   <div class="form-group">
      <label for="make">Make</label>
      <input type="text" name="make" id="make" class="form-control">
   </div>
   <div class="form-group">
      <label for="year">Year</label>
      <input type="text" name="year" id="year" class="form-control">
   </div>
   <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" name="description" id="description" 
         class="form-control"></textarea>
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
