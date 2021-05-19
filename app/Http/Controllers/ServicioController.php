<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios=Servicio::orderBy('cod_servicio','ASC')->paginate(3);
        return view('servicio.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$request->user()->authorizeRoles('admin');
        return view ('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicios=new Servicio; 
        $servicios->cod_servicio=$request->get('codigos');
        $servicios->cod_garantia=$request->get('codigog'); 
        $servicios->cod_cita=$request->get('codigoc'); 
        $servicios->tpo_servicio=$request->get('tposervicio'); 
        $servicios->save(); return Redirect::to('servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_servicio)
    {
        $personas=Persona::findOrFail($cod_servicio); 
        return view("servicio.edit",["servicios"=>$servicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_servicio)
    {
        $servicios=Servicio::findOrFail($cod_servicio); 
        $servicios->cod_servicio=$request->get('codigos');
        $servicios->cod_garantia=$request->get('codigog'); 
        $servicios->cod_cita=$request->get('codigoc'); 
        $servicios->tpo_servicio=$request->get('tposervicio'); 
        $servicios->update(); return Redirect::to('servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_servicio)
    {
        $servicios=Servicio::findOrFail($cod_servicio); 
        $servicios->delete(); return Redirect::to('servicio');
    }
}
