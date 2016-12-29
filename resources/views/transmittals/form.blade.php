@extends('layouts.app')

@section('content')
  <div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <form action="/transmittals" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('post') }}

      <div class="form-group">
        <label for="number">Transmittal Number</label>
        <input type="text" name="number" value="{{ old('number') }}" placeholder="0001" class="form-control">
      </div>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Type Document Title" class="form-control">
      </div>

      <div class="form-group">
        <label for="discipline_id">Discipline</label>
        <select name="discipline_id" id="discipline_id" class="form-control" onblur="completar();">
          @foreach($disciplines as $discipline)
            <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="">
  AQUI DEBEN IR LOS DOCUMENTOS COMO CHECKBOXES
</div>

<div class="form-group">
  <label for="document_id">Documents</label>
<table>
  <tr class="row">
    <td class="row col-xs-8">
          @foreach($documents as $document)

       <input type="checkbox" name="document_id" id="document_id" value="{{ $document->id }}" class="checkbox-lg" > {{ $document->full_number }} - {{$document->title}}
<br>
        @endforeach
</td>
  </tr>
</table>
</div>

      <div class="form-group">
        <input type="submit" name="Enviar" class="btn btn-primary">
      </div>

    </form>

    @endif
  </div>

@endsection
