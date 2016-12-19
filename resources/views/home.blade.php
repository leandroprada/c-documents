@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">C-Documents - Documents you see</div>

                <div class="panel-body">
                    You are Logged in!

                </div>
                <div class=" panel-body links">
                  <a href="documents/"><button type="button" name="button" class="btn-lg btn-default btn-danger-outline">
                  Documents</button></a>
                  <a href="transmittals/"><button type="button" name="button" class="btn-lg btn-default btn-danger-outline">Transmittals</button></a>
                  <a href="reports/"><button type="button" name="button" class="btn-lg btn-default btn-danger-outline">Reports</button></a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
