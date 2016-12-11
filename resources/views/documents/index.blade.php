@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>DL - Document List</h1>

    <table class="table table-bordered table-striped">
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
            <td>{{ $document->number }}</td>
            <td>{{ $document->title }}</td>
            <td>{{ $document->revision }}</td>
            <td>{{ $document->revision_date }}</td>
            <td>{{ $document->status_id }}</td>
            @if (Auth::user()->role_id === 1)
            <td>
            <a href="/documents/{{$document->id}}/edit">Editar</a>
              <form action="/documents/{{$document->id}}" method="post" style="display: inline-block">
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
