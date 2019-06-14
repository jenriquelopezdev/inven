<?php

namespace App\Http\Controllers;

use App\RegistroConsumoToner;
use Illuminate\Http\Request;
use DB;
class RegistroConsumoTonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('auth');
    }
    public function index()
    {
        $consumo=RegistroConsumoToner::with('impresoraUbicacion')
                                      ->with('impresoraUbicacion.impresora')
                                      ->with('impresoraUbicacion.ubicacion')
                                      ->with('cartucho')
                                      ->get();
        return response()->json($consumo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
          DB::transaction(function() use($request){
            $consumo=new RegistroConsumoToner();
            $consumo->save($request->all());
          });
          return response()->json(["ok"=>1]);
        }catch(\Exception $e){
          return response()->json(["error"=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroConsumoToner  $registroConsumoToner
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroConsumoToner $registroConsumoToner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroConsumoToner  $registroConsumoToner
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroConsumoToner $registroConsumoToner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroConsumoToner  $registroConsumoToner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroConsumoToner $registroConsumoToner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroConsumoToner  $registroConsumoToner
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroConsumoToner $registroConsumoToner)
    {
        //
    }
}
