@extends('layouts.app')

@section('content')
  <div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <h1>{{ $transmittal->name }}</h1>

    <div class="row">
      <div class="col-md-8">

        <h3>Number</h3>
        <p>{{ $transmittal->number }}</p>

        <h3>Title</h3>
        <p>{{ $transmittal->title }}</p>

        <h3>Discipline</h3>
        <p>{{ $transmittal->discipline->name }}</p>

        <h3>Project</h3>
        <p>{{ $transmittal->project->name }}</p>


      </div>

@endif

    </div>


  </div>

@endsection

<!-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection -->
