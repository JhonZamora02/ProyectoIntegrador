<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Garantia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ServicioCreateRequest;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$servicios=Servicio::orderBy('id_servicio','ASC')->paginate(3);
        return view('servicio.index',compact('servicios'));*/

        if($request){

            $query=trim($request->get('searchText'));
            $servicios=Servicio::orderBy('id_servicio','ASC')->paginate(3);
            return view('servicio.index',["servicios"=>$servicios,"searchText"=>$query]);
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$request->user()->authorizeRoles('admin');

        $garantia=Garantia::orderBy('id_garantia','DESC')->select(
            'garantias.id_garantia',
            'garantias.fecha_garantia', 
            'garantias.comentarios', 
            'garantias.condicion', 
            'garantias.fecha_limite')->get();
    
            return view('servicio.create')->with('garantia',$garantia);

        //return view ('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicioCreateRequest $request)
    {
        $servicios=new Servicio; 
        $servicios->id_servicio=$request->get('idservicio');
        $servicios->garantia_id_garantia=$request->get('idgarantia'); 
        $servicios->empleado_id_empleado=$request->get('idempleado'); 
        $servicios->vehiculo_id_vehiculo=$request->get('idvehiculo'); 
        $servicios->cita_id_cita=$request->get('idcita'); 
        $servicios->precio=$request->get('precio'); 
        $servicios->comentarios=$request->get('comentario'); 
        $servicios->tipo_servicios=$request->get('tservicio'); 
        $servicios->save(); 
        return Redirect::to('servicio');
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
    public function edit($id_servicio)
    {
        $servicios=Servicio::findOrFail($id_servicio); 
        return view("servicio.edit",["servicios"=>$servicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_servicio)
    {
        $servicios=Servicio::findOrFail($id_servicio); 
        $servicios->id_servicio=$request->get('idservicio');
        $servicios->garantia_id_garantia=$request->get('idgarantia'); 
        $servicios->empleado_id_empleado=$request->get('idempleado'); 
        $servicios->vehiculo_id_vehiculo=$request->get('idvehiculo'); 
        $servicios->cita_id_cita=$request->get('idcita'); 
        $servicios->precio=$request->get('precio'); 
        $servicios->comentarios=$request->get('comentario'); 
        $servicios->tipo_servicios=$request->get('tservicio'); 
        $servicios->update(); return Redirect::to('servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_servicio)
    {
        $servicios=Servicio::findOrFail($id_servicio); 
        $servicios->delete(); return Redirect::to('servicio');
    }
}
