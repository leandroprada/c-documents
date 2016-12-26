@extends('layouts.app')

@section('content')
  <div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <h1>{{ $document->name }}</h1>

    <div class="row">
      <div class="col-xs-7 col-xs-offset-5"><h3>Document for Project - {{$document->project->code}} - {{$document->project->name}}</h3></div>
      <div class="col-md-8">
        <h2>{{$document->full_number}}</h2>
        <p>Title: {{ $document->title }} </p>

        <p>Rev:     {{$document->revision}} - Date:
        {{$document->revision_date}}</p>


          <h3>Other Data</h3>

          <p>Area - {{ $document->area->name }}</p>

          <p>Discipline - {{ $document->discipline->name }}</p>

          <p>Division - {{ $document->division->name }}</p>


      </div>



    </div>
@endif
<a href="{{ url('/documents') }}">Go back to List</a>

  </div>

@endsection



<!-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection -->
