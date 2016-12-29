<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transmittal;


class TransmittalsController extends Controller
{


      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $transmittals = Transmittal::all()->where('user_id', \Auth::id())->all();
          return view('transmittals.index', compact('transmittals'));
          $transmittal->documents()->sync($request->input('documents'));

      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {

          $disciplines  = \App\Discipline::all();
          $documents  = \App\Document::all();
          return view('transmittals.form', compact('documents','disciplines'));
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
          $transmittal = \Auth::user()->transmittals()->create($request->all());
          /*
          $data = $request->all();
          $data['user_id'] = \Auth::id();
          $transmittal = Transmittal::create($data);
          */
          // $transmittal->documents()->sync($request->input('documents'));
          return redirect('transmittals');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show(Transmittal $transmittal)
      {
          return view('transmittals.show', compact('transmittals','documents'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit(Transmittal $transmittal)
      {

        // $transmittals = \App\Transmittal::all();
        $roles = \App\Role::all();
        $areas = \App\Area::all();
        $deliverables  = \App\Deliverable::all();
        $disciplines  = \App\Discipline::all();
        $divisions  = \App\Division::all();
        $statuses  = \App\Status::all();
        $projects  = \App\Project::all();
        return view('transmittals.form-edit', compact('roles', 'areas','deliverables','disciplines','divisions','status','projects'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, Transmittal $transmittal)
      {
          $transmittal->update($request->all());
          // $transmittal->materials()->sync($request->input('materials'));
          return redirect('transmittals');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy(Transmittal $transmittal)
      {
          Transmittal::destroy($id);

          // foreach ($transmittal->images as $image) {
          //   //borrar los archivo imagen
          //   \Storage::delete($image->src);
          //   //borrar las filas imagen
          //   $image->delete();
          // }
          //pasar el transmittal a inactivo
          // $transmittal->status_id = 0;
          // $transmittal->save();

          return redirect('transmittals');
      }

      public function borrarPorLote(Request $request)
      {
        //Transmittal::whereIn('id', $request->input(ids))->delete();
        Transmittal::whereIn('id', $request->input(ids))->update(['visible' => 0]);
      }

      public function images(Request $request, $id)
      {
        //guardo el archivo
        $transmittal = Transmittal::find($id);
        $file = $request->file('file');
        $ext = $file->extension();
        $name = uniqid();
        $file->storeAs('images/transmittals-'.$transmittal->id, $name.'.'.$ext);

        //persiste en base
        $image = new \App\Image(['src' => 'images/transmittals-'.$transmittal->id.'/'.$name.'.'.$ext]);
        $transmittal->images()->save($image);
      }
  }
