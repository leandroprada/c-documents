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
    <h1>RP - REPORTS</h1>
  </div>

<hr style="color:transparent">
<h2>Available Reports</h2>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
          <tr>
              <td>REPORT NAME</td>
              <td>THIS IS A REPORT ABOUT DOCUMENTS ISSUED UP TO DATE</td>
              <td><a href="#">ACCESS THE REPORT</a></td>




          </tr>
        </tbody>
      </table>

@endif
  </div>

@endsection
