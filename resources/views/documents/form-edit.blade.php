@extends('layouts.app')

@section('content')

  <div class="container">
    @if (!Auth::check())

    <div class="alert alert-danger" role="alert">
        <h2 class="alert-heading">Please login</h2>
        <h4 >Some features require being logged in to the system.</h4>
        </div>
         @else
    <form action="/documents/{{$document->id}}" method="post" class="form-horizontal">
      {{ csrf_field() }}
      {{ method_field('patch') }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$document->title}}" class="form-control" onblur="completar();">
      </div>

      <div class="form-group">
        <label for="project_id">Project</label>
        <select disabled name="project_id" class="form-control" onblur="completar();">
          @foreach($projects as $project)
          @php $selected = ($project->id == $document->project_id)?'selected':'' @endphp
            <option value="{{ $project->id }}" {{$selected}}>{{ $project->code }} - {{ $project->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="division_id">Division</label>
        <select disabled name="division_id" class="form-control" onblur="completar();">
          @foreach($divisions as $division)
          @php $selected = ($division->id == $document->division_id)?'selected':'' @endphp
            <option value="{{ $division->id }}" {{$selected}}>{{ $division->code }} - {{ $division->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="discipline_id">Discipline</label>
        <select disabled name="discipline_id" class="form-control" onblur="completar();">
          @foreach($disciplines as $discipline)
          @php $selected = ($discipline->id == $document->discipline_id)?'selected':'' @endphp
            <option value="{{ $discipline->id }}" {{$selected}}>{{ $discipline->name }}</option>
          @endforeach
                </select>
      </div>
      <div class="form-group">
        <label for="deliverable_id">Deliverable</label>
        <select disabled name="deliverable_id" id="deliverable_id" class="form-control" onblur="completar();">
          @foreach($deliverables as $deliverable)
            <option value="{{ $deliverable->id }}">{{ $deliverable->code }} - {{$deliverable->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="area_id">Area</label>
        <select disabled name="area_id" class="form-control" onblur="completar();">
          @foreach($areas as $area)
          @php $selected = ($area->id == $document->area_id)?'selected':'' @endphp
            <option value="{{ $area->id }}" {{$selected}}>{{ $area->code }} - {{ $area->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="number">Number</label>
        <input disabled type="text" name="number" value="{{$document->number}}" class="form-control" onblur="completar();" onfocus="completar();">
      </div>
      <div class="form-group">
        <label for="full_number">Full Number</label>
        <input disabled type="text" name="full_number" id="full_number" value="{{ $document->full_number }}"  class="form-control " onfocus ="completar();" onblur ="completar();" >
      </div>
      <div class="form-group">
        <label for="client_code">Client Code</label>
        <input type="text" name="client_code" id="client_code" value="{{ $document->client_code }}" placeholder="Type Client Code" class="form-control">
      </div>
      <div class="form-group">
        <label for="revision">Revision</label>
        <input type="text" name="revision" value="{{ $document->revision }}" class="form-control">
      </div>

      <div class="form-group">
        <label for="revision_date">Rev. Date</label>
        <input type="text" name="revision_date" id="revision_date" required value="{{ $document->revision_date }}"  class="form-control">
      </div>
      <div class="form-group">
        <label for="status_id">Status</label>
        <select name="area_id" class="form-control" onblur="completar();">
          @foreach($statuses as $status)
          @php $selected = ($status->id == $document->status_id)?'selected':'' @endphp
            <option value="{{ $status->id }}" {{$selected}}>{{ $status->name }}</option>
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
    deliverable = document.getElementById("deliverable_id");
    area = document.getElementById("area_id");
    numberValue = document.getElementById("number");
    full_number = document.getElementById("full_number");
    numberText = numberValue.value;
  //ifs para llenar los campos con vacio o algo

  if (project.selectedIndex !==0) {
      projectText= project.options[project.selectedIndex].text;
      projectText = projectText.substring(0, 4);
    }
    else {projectText = ""}

    if (division.selectedIndex !==0) {
        divisionText= division.options[division.selectedIndex].text
        divisionText = divisionText.substring(0, 3);

      }
      else {deliverableText = ""}
    if (deliverable.selectedIndex !==0) {
        deliverableText= deliverable.options[deliverable.selectedIndex].text
        deliverableText = deliverableText.substring(0, 2);

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
    td3 = deliverableText.trim();
    ta = areaText.trim();
    tn = numberText.trim();
  //damos valor a la descripcion;
    var desc = tp+"-"+td1+"-"+td2+"-"+td3+"-"+ta+"-"+tn;
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
v
