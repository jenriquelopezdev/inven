<?php

namespace App\Http\Controllers;

use App\Cartucho;
use Illuminate\Http\Request;
use DB;
class CartuchoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
          $cartucho=new Cartucho();
          $cartucho->modelo=$request->input('modelo');
          $cartucho->cantidad=$request->input('cantidad');
          $cartucho->save();
        });
        return response()->json(['ok'=>1]);
      }catch(\Exception $e){
        return response()->json(['error'=>$e->getMessage()]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cartucho  $cartucho
     * @return \Illuminate\Http\Response
     */
    public function show(Cartucho $cartucho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartucho  $cartucho
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartucho $cartucho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartucho  $cartucho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartucho $cartucho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartucho  $cartucho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartucho $cartucho)
    {
        //
    }
}
