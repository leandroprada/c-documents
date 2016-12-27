@extends('layouts.app')
<?php $statuses  = \App\Status::all(); ?>
<?php $roles  = \App\Role::all(); ?>
<?php $documents  = \App\Document::all(); ?>
@section('content')
<div class="container">
    @if (!Auth::check())
      <div class="alert alert-danger" role="alert">

        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else

<div class="row">
  <div class="col-xs-4">
    <h1>CREATE TRANSMITTAL </h1>
  </div>
  <div class="status_list">
    <form class="" action="" method="post">
      {{ csrf_field() }}
      {{ method_field('post') }}
    <table class="table">

      <tr>
          Document Statuses:
      </tr>
            @foreach($statuses as $status)
            @if ($status->id !== 1)
      <tr><td>

         {{ $status->id }} : {{ $status->name }}</td> </tr>
         @endif
       @endforeach

    </table>

  </div>
  <div >
    <label for="transmittal">Transmittal Number</label>
  <input  type="text" name="number" value="">
</div>
<div>
    <label for="title">Transmittal Title</label>
  <input type="text" name="title" value="">

  </div>
</div>
<hr style="color:transparent">
    <table class="table table-bordered table-striped" style="font-size:0.8em">
      <thead>
        <tr>

          <th>Sel</th>
          <th>Number</th>
          <th>Title</th>
          <th>Revision</th>
          <th>Rev. Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($documents as $document)
          <tr>
            <td><input type="checkbox" name="{{$document->id}}" value="{{$document->id}}"></td>
            <td>{{ $document->full_number }}</td>
            <td>{{ $document->title }}</td>
            <td>{{ $document->revision }}</td>
            <td>{{ $document->revision_date }}</td>

            <td>
            @foreach($statuses as $status)
            @if ( $document->status_id===
           $status->id) {{ $status->name }}
          @endif
          @endforeach


          </td>





          </tr>
        @endforeach


        </tbody>
      </table>

@endif
<div class="col-xs-3 col-xs-offset-8  col-md-2 col-md-offset-10"> <input type="submit"class="btn btn-success btn-lg" name="trn-"title="Create Transmittal" value="Generate Transmittal" ><a href="#" style="text-decoration:none; color:white" >Generate Transmittal</a></button></div>

</form>
  </div>


@endsection
