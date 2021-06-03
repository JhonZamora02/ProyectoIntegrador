<?php

namespace App\Http\Controllers;

use App\DetalleServicio;
use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Detalle_ServicioCreateRequest;

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
        'servicios.id_servicio',
        'servicios.garantia_id_garantia', 
        'servicios.empleado_id_empleado', 
        'servicios.vehiculo_id_vehiculo', 
        'servicios.cita_id_cita', 
        'servicios.precio',
        'servicios.comentarios',
        'servicios.tipo_servicios')->get();

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
        $detalles->id_dservicio=$request->get('iddetalle');
        $detalles->servicio_id_servicio=$request->get('servicio_id'); 
        $detalles->pedido_factura_id_pedido_fact=$request->get('idpfactura'); 
        $detalles->cantidad=$request->get('cantidad'); 
        $detalles->descuento=$request->get('descuento'); 
        $detalles->save(); 
        return Redirect::to('detalleservicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleServicio  $detalleservicio
     * @return \Illuminate\Http\Response
     */
    public function show(Garantia $garantia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleServicio  $detalleservicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id_dservicio)
    {
        $detalles=DetalleServicio::findOrFail($id_dservicio); 
        return view("detalleservicio.edit",["detalles"=>$detalles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleServicio  $detalleservicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_dservicio)
    {
        $detalles=DetalleServicio::findOrFail($id_dservicio); 
        $detalles->id_dservicio=$request->get('iddetalle');
        $detalles->servicio_id_servicio=$request->get('servicio_id'); 
        $detalles->pedido_factura_id_pedido_fact=$request->get('idpfactura'); 
        $detalles->cantidad=$request->get('cantidad'); 
        $detalles->descuento=$request->get('descuento'); 
        $detalles->update(); return Redirect::to('detalleservicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleServicio  $detalleservicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_dservicio)
    {
        $detalles=DetalleServicio::findOrFail($id_dservicio); 
        $detalles->delete(); return Redirect::to('detalleservicio');
    }
}
