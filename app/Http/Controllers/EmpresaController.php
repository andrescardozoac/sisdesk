<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\User;


class EmpresaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Empresa = Empresa::paginate(5);
        return view('empresa.index',compact('Empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Empresa = new Empresa;
        $Empresa->tipoid= $request->tipoIdentificacion;
        $Empresa->identificacion = $request->identificacion;
        $Empresa->nombre = $request->nombreEmpresa;
        $Empresa->descripcion = $request->descripcion;
        $Empresa->correo = $request->email;
        $Empresa->telefono = $request->telefono;
        $Empresa->tipoEmpresa =$request->tipoEmpresa;
        $Empresa->save();

       
        $user = User::findOrFail($request->id_user);
        $user->empresas()->attach($Empresa->id);

       return redirect()->route('empresa.index')->with('datos','Empresa Registrada Correctamente');

       // return dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Empresa = Empresa::findOrFail($id);
        return view('empresa.show',compact('Empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Empresa = Empresa::findOrFail($id);
        return view('empresa.edit',compact('Empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Empresa = Empresa::findOrFail($id);
        $Empresa->tipoid= $request->tipoIdentificacion;
        $Empresa->identificacion = $request->identificacion;
        $Empresa->nombre = $request->nombreEmpresa;
        $Empresa->descripcion = $request->descripcion;
        $Empresa->correo = $request->email;
        $Empresa->telefono = $request->telefono;
        $Empresa->tipoEmpresa =$request->tipoEmpresa;
        $Empresa->save();
       return redirect()->route('empresa.index')->with('datos','Empresa Actualizado Correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        
       $Empresa = Empresa::findOrFail($id);
       $user = User::findOrFail($request->id_user);
       $user->empresas()->detach($id);
       $Empresa->delete();
        return redirect()->route('empresa.index')->with('datos','Empresa Eliminada Correctamente');
        
    }

    public function confirm($id)
    {
        $Empresa = Empresa::findOrFail($id);
        return view('empresa.confirm',compact('Empresa'));
    }
}