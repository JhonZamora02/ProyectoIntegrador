<?php

namespace App\Http\Controllers;

use App\DetalleServicio;
use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DetalleServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){

            $query=trim($request->get('searchText'));
            $detalles=DetalleServicio::orderBy('id_dservicio','ASC')->paginate(3);
            return view('detalleservicio.index',["detalles"=>$detalles,"searchText"=>$query]);

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio=Servicio::orderBy('id_servicio','DESC')->select(
        'servicios.id_garantia', 
        'servicios.precio',
        'servicios.comentarios',
        'servicios.tipo_servicios',
        'servicios.id_servicio')->get();

        return view('detalleservicio.create')->with('servicio',$servicio);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalles=new DetalleServicio; 
        $detalles->id_dservicio=$request->get('idgarantia');
        $detalles->id_servicio=$request->get('fgarantia'); 
        $detalles->id_pfactura=$request->get('comentario'); 
        $detalles->cantidad=$request->get('condicion'); 
        $detalles->descuento=$request->get('flimite'); 
        $detalles->save(); 
        return Redirect::to('detalleservicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function show(Garantia $garantia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function edit($id_garantia)
    {
        $garantias=Garantia::findOrFail($id_garantia); 
        return view("garantia.edit",["garantias"=>$garantias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_garantia)
    {
        $garantias=Garantia::findOrFail($id_garantia); 
        $garantias->id_garantia=$request->get('idgarantia');
        $garantias->fecha_garantia=$request->get('fgarantia'); 
        $garantias->comentarios=$request->get('comentario'); 
        $garantias->condicion=$request->get('condicion'); 
        $garantias->fecha_limite=$request->get('flimite');
        $garantias->update(); return Redirect::to('garantia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garantia  $garantia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_garantia)
    {
        $garantias=Garantia::findOrFail($id_garantia); 
        $garantias->delete(); return Redirect::to('garantia');
    }
}
