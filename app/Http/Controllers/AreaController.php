<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{

  public function __construct(){
    $this->middleware('permission:areas.create')->only(['create','store']);
    $this->middleware('permission:areas.index')->only('index');
    $this->middleware('permission:areas.edit')->only(['edit','update']);
    $this->middleware('permission:areas.show')->only('show');
    $this->middleware('permission:areas.destroy')->only('destroy');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $user = Auth::user();
    if($user->esAdministrador()){
      $areas = Areas::paginate();
    }else{
      $areas = $user->areas()->paginate();
    }
    return view('areas.index',compact('areas'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('areas.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(AreaRequest $request)
  {
    $area = Areas::create($request->all());
    return redirect()->route('areas.edit',$area->id)->with('info','Area creada con exito');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Areas  $area
  * @return \Illuminate\Http\Response
  */
  public function show(Areas $area)
  {
    return view('areas.show',compact('area'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Areas  $area
  * @return \Illuminate\Http\Response
  */
  public function edit(Area $area)
  {
    return view('areas.edit',compact('area'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Areas  $area
  * @return \Illuminate\Http\Response
  */
  public function update(AsignaturaRequest $request, Asignatura $area)
  {
    $area->update($request->all());
    return redirect()->route('areas.edit',$area->id)->with('info','Asignatura actualizada con exito');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Areas  $area
  * @return \Illuminate\Http\Response
  */
  public function destroy(Area $area)
  {
    $area->delete();

    return back()->with('info','Eliminado con exito');
  }
}
