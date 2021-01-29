<?php

namespace App\Http\Controllers;

use App\Models\Consecutive;
use Illuminate\Http\Request;

class ConsecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l=Consecutive::All();
        $l->load('documenttype');
        return $l;
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consecutivedocumenttype()
    {
        $l=Consecutive::All();
        $l->load('documenttype');
        return $l;
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consecutive  $consecutive
     * @return \Illuminate\Http\Response
     */
    public function show(Consecutive $consecutive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consecutive  $consecutive
     * @return \Illuminate\Http\Response
     */
    public function edit(Consecutive $consecutive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consecutive  $consecutive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consecutive $consecutive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consecutive  $consecutive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consecutive $consecutive)
    {
        //
    }

      /**
     * Consulta el consecutivo por tipo de documento
     *
     * @param  Documenttype_id
     * @return \Illuminate\Http\Response
     */
    public function consecutivebydocumenttype($documenttype_id)
    {
        $t=Consecutive::where('documenttype_id', $documenttype_id)
                    ->get();
        $t->load('documenttype');
        return $t;
    }
    
    

}
