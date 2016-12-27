@extends('layouts.app')
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
    @foreach($documents as $document)
$document->full_number
$document->name
$document->revision
$document->status
@endforeach
  </div>
</div>
@endif
  </div>
</form>
@endsection
