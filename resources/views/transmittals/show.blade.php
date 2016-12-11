@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{{ $transmittal->name }}</h1>

    <div class="row">
      <div class="col-md-8">

        <h3>Number</h3>
        <p>{{ $transmittal->number }}</p>

        <h3>Title</h3>
        <p>{{ $transmittal->title }}</p>

        <h3>Area</h3>
        <p>{{ $transmittal->area->name }}</p>

        <h3>Discipline</h3>
        <p>{{ $transmittal->discipline->name }}</p>

        <h3>Division</h3>
        <p>{{ $transmittal->divisions }}</p>


      </div>



    </div>


  </div>

@endsection

<!-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection -->
