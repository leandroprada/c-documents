@extends('layouts.app')

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
    <h1>DL - Document List </h1>
  </div>
  <div class="status_list">
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
<div class="col-xs-3 col-xs-offset-8  col-md-2 col-md-offset-10"> <button type="button"class="btn btn-success btn-lg" name="button"  ><a href="/documents/create" style="text-decoration:none; color:white" >New Document</a></button></div>
</div>
<hr style="color:transparent">
    <table class="table table-bordered table-striped" style="font-size:0.8em">
      <thead>
        <tr>
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
            @if (Auth::user()->role_id === 2)
            <td style="text-align:center">
              <a href="/documents/{{$document->id}}/edit" title="Edit" ><button type="button"class="btn btn-primary btn-xs" style="padding-left:5px;" name="button"id="btn_index_docs_edit"> <span class="ion-compose" style="font-size:2.2em"></span></button></a>

              <a href="/documents/{{$document->id}}/version"  title="Version" ><button type="button"class="btn btn-warning btn-xs" style="padding-left:5px;" name="button"id="btn_index_docs_version" ><span class="ion-ios-copy-outline" style="font-size:2.2em"></span></button></a>
              <a href="/documents/{{$document->id}}/" title="Details" ><button type="button"class="btn btn-success btn-xs" style="padding-left:5px;" name="button" id="btn_index_docs_details"><span class="ion-ios-list-outline" style="font-size:2.2em"></span></button></a>
        <form action="/documents/{{$document->id}}" method="post" style="display: inline-block;">
                {{ csrf_field() }}
                {{ method_field('delete') }}
              <button type="submit" name="Borrar"title="Delete" id="btn_index_docs_delete" value="DELETE" class="btn btn-danger btn-xs" style="padding-left:5px;" style="display: inline-block; " ><span class="ion-close" style="font-size:2.2em"></span></button>
              </form>
            </td>

              @endif



          </tr>
        @endforeach
        </tbody>
      </table>

@endif
  </div>

@endsection
