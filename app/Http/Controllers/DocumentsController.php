<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all()->where('user_id', \Auth::id())->all();
        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\User::all();
        $roles = \App\Role::all();
        $areas = \App\Area::all();
        $deliverables  = \App\Deliverable::all();
        $disciplines  = \App\Discipline::all();
        $divisions  = \App\Division::all();
        $statuses  = \App\Status::all();
        $projects  = \App\Project::all();
        return view('documents.form', compact('users','roles', 'areas','areas','deliverables','disciplines','divisions','statuses','projects'));
    }

    public function version(Document $document)
    {
        $users = \App\User::all();
        $roles = \App\Role::all();
        $areas = \App\Area::all();
        $deliverables  = \App\Deliverable::all();
        $disciplines  = \App\Discipline::all();
        $divisions  = \App\Division::all();
        $statuses  = \App\Status::all();
        $projects  = \App\Project::all();
        return view('documents.version', compact('users','roles', 'areas','areas','deliverables','disciplines','divisions','statuses','projects','document'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = \Auth::user()->documents()->create($request->all());

        $document->user_id = \Auth::id();
        /*
        $data = $request->all();
        $document = Document::create($data);
        */
        // $document->materials()->sync($request->input('materials'));
        return redirect('documents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {

      // $documents = \App\Document::all();
      $roles = \App\Role::all();
      $areas = \App\Area::all();
      $deliverables  = \App\Deliverable::all();
      $disciplines  = \App\Discipline::all();
      $divisions  = \App\Division::all();
      $statuses  = \App\Status::all();
      $projects  = \App\Project::all();
      return view('documents.form-edit', compact('document','roles', 'areas','deliverables','disciplines','divisions','statuses','projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $document->update($request->all());
        // $document->materials()->sync($request->input('materials'));
        return redirect('documents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
      $id = $document->id;
        Document::destroy($id);

        // foreach ($document->images as $image) {
        //   //borrar los archivo imagen
        //   \Storage::delete($image->src);
        //   //borrar las filas imagen
        //   $image->delete();
        // }
        //pasar el document a inactivo
        $document->status_id = 0;
        $document->save();

        return redirect('documents');
    }

    public function borrarPorLote(Request $request)
    {
      //Document::whereIn('id', $request->input(ids))->delete();
      Document::whereIn('id', $request->input(ids))->update(['visible' => 0]);
    }

    public function images(Request $request, $id)
    {
      //guardo el archivo
      $document = Document::find($id);
      $file = $request->file('file');
      $ext = $file->extension();
      $name = uniqid();
      $file->storeAs('images/documents-'.$document->id, $name.'.'.$ext);

      //persiste en base
      $image = new \App\Image(['src' => 'images/documents-'.$document->id.'/'.$name.'.'.$ext]);
      $document->images()->save($image);
    }
}
