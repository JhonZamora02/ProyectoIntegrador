<?php

namespace App\Http\Controllers;

use App\Garantia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GarantiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garantias=Garantia::orderBy('id_garantia','ASC')->paginate(3);
        return view('garantia.index',compact('garantias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$request->user()->authorizeRoles('admin');
        return view ('garantia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $garantias=new Garantia; 
        $garantias->id_garantia=$request->get('idgarantia');
        $garantias->fecha_garantia=$request->get('fgarantia'); 
        $garantias->comentarios=$request->get('comentario'); 
        $garantias->condicion=$request->get('condicion'); 
        $garantias->fecha_limite=$request->get('flimite'); 
        $garantias->save(); 
        return Redirect::to('garantia');
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
    public function edit(Garantia $garantia)
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
