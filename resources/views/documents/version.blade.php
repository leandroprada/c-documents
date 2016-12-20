@extends('layouts.app')

@section('content')


<div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <form action="/documents" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('post') }}


      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Type Document Title" class="form-control">
      </div>

      <div class="form-group">
        <label for="project_id">Project</label>
        <select name="project_id" id="project_id" class="form-control" onblur="completar();">
          @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->code}} - {{ $project->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="division_id">Division</label>
        <select name="division_id" id="division_id" class="form-control" onblur="completar();">
          @foreach($divisions as $division)
            <option value="{{ $division->id }}">{{$division->code}} - {{ $division->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="discipline_id">Discipline</label>
        <select name="discipline_id" id="discipline_id" class="form-control" onblur="completar();">
          @foreach($disciplines as $discipline)
            <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="area_id">Area</label>
        <select name="area_id" id="area_id" class="form-control" onblur="completar();">
          @foreach($areas as $area)
            <option value="{{ $area->id }}">{{ $area->code }} - {{ $area->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="number">Number</label>
        <input type="text" name="number" id="number" value="{{ old('number') }}" placeholder="0001" class="form-control" onblur ="completar();" onfocus="completar();">
      </div>

      <div class="form-group">
        <label for="full_number">Full Number</label>
        <input type="text" name="full_number" id="full_number" value="{{ old('full_number') }}" placeholder="0001" class="form-control "onblur ="completar();" >
      </div>
      <div class="form-group">
        <label for="client_code">Client Code</label>
        <input type="text" name="client_code" id="client_code" value="{{ old('client_code') }}" placeholder="Type Client Code" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision">Revision</label>
        <input type="text" name="revision" id="revision" value="{{ old('revision') }}"  placeholder="A" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision_date">Rev. Date</label>
        <input type="text" name="revision_date" id="revision_date" value="{{ old('revision_date') }}" placeholder="2016-05-29" class="form-control">
      </div>
      <div class="form-group">
        <label for="status_id">Status</label>
        <select name="status_id" id="Status_id" class="form-control">
          @foreach($statuses as $status)
            <option value="{{ $status->id }}"> {{ $status->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <input type="submit" name="Enviar" class="btn btn-primary">
      </div>

    </form>
    @endif

  </div>

@endsection
<script>
  function completar(){
  //selectores de DOM
    project = document.getElementById("project_id");
    division = document.getElementById("division_id");
    discipline = document.getElementById("discipline_id");
    area = document.getElementById("area_id");
    numberValue = document.getElementById("number");
    full_number = document.getElementById("full_number");
    numberText = numberValue.value;
  //ifs para llenar los campos con vacio o algo

  if (project.selectedIndex !==0) {
      projectText= project.options[project.selectedIndex].text;
      projectText = projectText.substring(0, 3);
    }
    else {projectText = ""}

    if (division.selectedIndex !==0) {
        divisionText= division.options[division.selectedIndex].text
        divisionText = divisionText.substring(0, 3);

      }
      else {divisionText = ""}
  if (discipline.selectedIndex !==0) {
      disciplineText= discipline.options[discipline.selectedIndex].text
      disciplineText = disciplineText.substring(0, 1);

    }
    else {disciplineText = ""}

    if (area.selectedIndex !==0) {
        areaText= area.options[area.selectedIndex].text
        areaText = areaText.substring(0, 4);

      }
      else {areaText = ""}

  //trims de los campos
    tp = projectText.trim();
    td1 = divisionText.trim();
    td2 = disciplineText.trim();
    ta = areaText.trim();
    tn = numberText.trim();
  //damos valor a la descripcion;
    var desc = tp+"-"+td1+"-"+td2+"-"+ta+"-"+tn;
    var descripcionSinGuiones =desc.replace( "  ", "")
full_number.value = desc;
  // function valoresDeDesc() {
  // if  ((tr !== "") AND (to !== ""))
  // {return tr+" "+tt+" "+to;}
  // else if   ((tr !== "") AND (tc !== ""))
  // {return tr+" "+tc+" "+to;}
  // else if   ((tr !== "") AND (ti !== ""))
  // {return tr+" "+ti+" "+to;}
  // else if   ((tr !== "") AND (tv !== ""))
  // {return tr+" "+tv+" "+to;}



  }

</script>
