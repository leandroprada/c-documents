@extends('layouts.app')

@section('content')

  <div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <form action="/transmittals/{{$transmittal->id}}" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('patch') }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$transmittal->title}}" class="form-control">
      </div>

      <div class="form-group">
        <label for="project_id">Project</label>
        <select name="project_id" class="form-control">
          @foreach($projects as $project)
          @php $selected = ($project->id == $transmittal->project_id)?'selected':'' @endphp
            <option value="{{ $project->id }}" {{$selected}}>{{ $project->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="division_id">Division</label>
        <select name="division_id" class="form-control">
          @foreach($divisions as $division)
          @php $selected = ($division->id == $transmittal->division_id)?'selected':'' @endphp
            <option value="{{ $division->id }}" {{$selected}}>{{ $division->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="discipline_id">Discipline</label>
        <select name="discipline_id" class="form-control">
          @foreach($disciplines as $discipline)
          @php $selected = ($discipline->id == $transmittal->discipline_id)?'selected':'' @endphp
            <option value="{{ $discipline->id }}" {{$selected}}>{{ $discipline->name }}</option>
          @endforeach
                </select>
      </div>
      <div class="form-group">
        <label for="area_id">Area</label>
        <select name="area_id" class="form-control">
          @foreach($areas as $area)
          @php $selected = ($area->id == $transmittal->area_id)?'selected':'' @endphp
            <option value="{{ $area->id }}" {{$selected}}>{{ $area->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="number">Number</label>
        <input type="text" name="number" value="{{$transmittal->number}}" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision">Revision</label>
        <input type="text" name="revision" value="{{ $transmittal->revision }}" class="form-control">
      </div>




      <div class="form-group">
        <input type="submit" name="Enviar" class="btn btn-primary">
      </div>

    </form>
    @endif
  </div>

@endsection
