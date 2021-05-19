<?php

namespace App\Http\Controllers;

use App\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::orderBy('id','ASC')->paginate(3);
        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas=new Persona; 
        $personas->documentoidentidad=$request->get('documento');
        $personas->primer_nombre=$request->get('pnombre'); 
        $personas->segundo_nombre=$request->get('snombre'); 
        $personas->primer_apellido=$request->get('papellido'); 
        $personas->segundo_apellido=$request->get('sapellido'); 
        $personas->telefono=$request->get('telefono'); 
        $personas->save(); return Redirect::to('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetallePedido  $detallePedido
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePedido $detallePedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetallePedido  $detallePedido
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePedido $detallePedido)
    {
        $personas=Persona::findOrFail($id); 
        return view("persona.edit",["personas"=>$personas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetallePedido  $detallePedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePedido $detallePedido)
    {
        $personas=Persona::findOrFail($id); 
        $personas->documentoidentidad=$request->get('documento'); 
        $personas->primer_nombre=$request->get('pnombre'); 
        $personas->segundo_nombre=$request->get('snombre'); 
        $personas->primer_apellido=$request->get('papellido'); 
        $personas->segundo_apellido=$request->get('sapellido'); 
        $personas->telefono=$request->get('telefono'); 
        $personas->update(); return Redirect::to('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetallePedido  $detallePedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePedido $detallePedido)
    {
        $personas=Persona::findOrFail($id); 
        $personas->delete(); return Redirect::to('persona');
    }
}
