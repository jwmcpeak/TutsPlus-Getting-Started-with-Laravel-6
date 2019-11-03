@extends('layout')

@section('title', 'Guitars!')


@section('content')
<h4>{{ $guitar['title'] }}</h4>

<div class="row">
    <div class="col-sm-2">
        <ul>
            <li>Make: {{ $guitar['make'] }}</li>
            <li>Year: {{ $guitar['year'] }}</li>
        </ul>
    </div>
    <div class="col">
        {{ $guitar->description }}
    </div>
</div>
@endsection

@section('scripts')
<script>
   //alert('Hello!')
</script>
@endsection
