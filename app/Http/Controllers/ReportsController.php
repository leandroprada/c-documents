<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reports = Report::all()->where('user_id', \Auth::id())->all();
        return view('reports.index');
    }
    public function report()
    {
        $documents = Document::all()->where('project_id', $_POST['project_id']);
        return view('reports.reportByProject');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \App\Role::all();
        $areas = \App\Area::all();
        $deliverables  = \App\Deliverable::all();
        $disciplines  = \App\Discipline::all();
        $divisions  = \App\Division::all();
        $statuses  = \App\Status::all();
        $projects  = \App\Project::all();
        return view('reports.form', compact('roles', 'areas','areas','deliverables','disciplines','divisions','statuses','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = \Auth::user()->reports()->create($request->all());

        $report->user_id = \Auth::id();
        /*
        $data = $request->all();
        $report = Report::create($data);
        */
        // $report->materials()->sync($request->input('materials'));
        return redirect('reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {

      // $reports = \App\Report::all();
      $roles = \App\Role::all();
      $areas = \App\Area::all();
      $deliverables  = \App\Deliverable::all();
      $disciplines  = \App\Discipline::all();
      $divisions  = \App\Division::all();
      $statuses  = \App\Status::all();
      $projects  = \App\Project::all();
      return view('reports.form-edit', compact('roles', 'areas','deliverables','disciplines','divisions','status','projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->update($request->all());
        // $report->materials()->sync($request->input('materials'));
        return redirect('reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Report::destroy($id);

        // foreach ($report->images as $image) {
        //   //borrar los archivo imagen
        //   \Storage::delete($image->src);
        //   //borrar las filas imagen
        //   $image->delete();
        // }
        //pasar el report a inactivo
        // $report->status_id = 0;
        // $report->save();

        return redirect('reports');
    }

    public function borrarPorLote(Request $request)
    {
      //Report::whereIn('id', $request->input(ids))->delete();
      Report::whereIn('id', $request->input(ids))->update(['visible' => 0]);
    }

    public function images(Request $request, $id)
    {
      //guardo el archivo
      $report = Report::find($id);
      $file = $request->file('file');
      $ext = $file->extension();
      $name = uniqid();
      $file->storeAs('images/reports-'.$report->id, $name.'.'.$ext);

      //persiste en base
      $image = new \App\Image(['src' => 'images/reports-'.$report->id.'/'.$name.'.'.$ext]);
      $report->images()->save($image);
    }
}
