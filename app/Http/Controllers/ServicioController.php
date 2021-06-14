<?php

namespace App\Http\Controllers;

use DB;
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

        /*$datos=DB::table('servicios as serv')
        ->join('detalle_servicios as dserv','dserv.servicio_id_servicio','=','serv.id_servicio')
        ->join('citas as cit','cit.id_cita','=','serv.cita_id_cita')
        ->join('empleados as emp','emp.id_empleado','=','serv.empleado_id_empleado')
        ->join('vehiculos as veh','veh.id_vehiculo','=','serv.vehiculo_id_vehiculo')
        ->join('garantias as gar','gar.id_garantia','=','serv.garantia_id_garantia')
        ->select("veh.placa", "emp.nombre_completo", "cit.fecha_cita", "dserv.servicio_id_servicio")
        ->get();*/

        if($request){

            $query=trim($request->get('searchText'));
            $servicios=Servicio::orderBy('id_servicio','ASC')->paginate(3);
            return view('servicio.index',["servicios"=>$datos,"searchText"=>$query]);
            
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
        $servicios->id_servicio=$request->get('id_servicio');
        $servicios->garantia_id_garantia=$request->get('garantia_id_garantia'); 
        $servicios->empleado_id_empleado=$request->get('empleado_id_empleado'); 
        $servicios->vehiculo_id_vehiculo=$request->get('vehiculo_id_vehiculo'); 
        $servicios->cita_id_cita=$request->get('cita_id_cita'); 
        $servicios->precio=$request->get('precio'); 
        $servicios->comentarios=$request->get('comentarios'); 
        $servicios->tipo_servicios=$request->get('tipo_servicios'); 
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
