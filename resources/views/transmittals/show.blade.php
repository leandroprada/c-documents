@extends('layouts.app')
<?php $transmittals = App\Transmittal::all(); ?>
@section('content')
  <div class="container">
    @if (!Auth::check())
    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
        @else
        <div class="row">
          <div class="col-md-8">
            <table class="table">
              <thead><tr>
                <th>Row</th>
                <th>Number</th>
                <th>Title</th>
                <th>Discipline</th>
                <th>Project</th>
                    </tr>
                </thead>
           <tbody>
             @php $i=1;
             @endphp
         @foreach ($transmittals as $transmittal)
         <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $transmittal->number }}</td>
            <td>{{ $transmittal->title }}</td>
            <td>{{ $transmittal->discipline_id }}</td>
            <td>{{ $transmittal->project_ID }}</td>
            <td><a href="#">LINK A ESTE TRANSMITTAL</a></td>
            @endforeach
          </tr>

        </tbody>
         </table>



      </div>


    </div>


  </div>
  @endif
@endsection

<!-- @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection -->
