@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>TL - Transmittal List</h1>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Number</th>
          <th>Title</th>
          <th>Discipline</th>
          <th>Rev. Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($transmittals as $transmittal)
          <tr>
            <td>{{ $transmittal->number }}</td>
            <td>{{ $transmittal->user->discipline }}</td>
            <td>{{ $transmittal->created_at }}</td>

            @if (Auth::user()->role_id === 1)
            <td>
            <a href="/transmittals/{{$transmittal->id}}/edit">Editar</a>
              <form action="/transmittals/{{$transmittal->id}}" method="post" style="display: inline-block">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <input type="submit" name="Borrar" value="Borrar" class="btn btn-danger btn-xs" style="display: inline-block">
              </form>
            </td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>

  </div>

@endsection