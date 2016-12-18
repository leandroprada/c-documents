@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="/documents" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('post') }}


      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Type Document Title" class="form-control">
      </div>

      <div class="form-group">
        <label for="project_id">Project</label>
        <select name="project_id" class="form-control">
          @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->code}} - {{ $project->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="division_id">Division</label>
        <select name="division_id" class="form-control">
          @foreach($divisions as $division)
            <option value="{{ $division->id }}">{{$division->code}} - {{ $division->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="discipline_id">Discipline</label>
        <select name="discipline_id" class="form-control">
          @foreach($disciplines as $discipline)
            <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="area_id">Area</label>
        <select name="area_id" class="form-control">
          @foreach($areas as $area)
            <option value="{{ $area->id }}">{{ $area->code }} - {{ $area->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="number">Number</label>
        <input type="text" name="number" value="{{ old('number') }}" placeholder="0001" class="form-control">
      </div>
      <div class="form-group">
        <label for="client_code">Client Code</label>
        <input type="text" name="client_code" value="{{ old('client_code') }}" placeholder="Type Client Code" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision">Revision</label>
        <input type="text" name="revision" value="{{ old('revision') }}"  placeholder="A" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision_date">Rev. Date</label>
        <input type="text" name="revision_date" value="{{ old('revision_date') }}" placeholder="2016-05-29" class="form-control">
      </div>

      <div class="form-group">
        <input type="submit" name="Enviar" class="btn btn-primary">
      </div>

    </form>
  </div>

@endsection

<script src="js/interactive_form.js"></script>
