<?php

namespace App\Http\Controllers;

use App\Models\Noveltiesbox;
use Illuminate\Http\Request;

class NoveltiesboxController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noveltiesbox  $noveltiesbox
     * @return \Illuminate\Http\Response
     */
    public function show(Noveltiesbox $noveltiesbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noveltiesbox  $noveltiesbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Noveltiesbox $noveltiesbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noveltiesbox  $noveltiesbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noveltiesbox $noveltiesbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noveltiesbox  $noveltiesbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noveltiesbox $noveltiesbox)
    {
        //
    }


     /**
     * Consulta el consecutivo por tipo de documento
     *
     * @param  User_id
     * @return \Illuminate\Http\Response
     */
    public function noveltiesboxbyuser($user_id)
    {
        $t=Noveltiesbox::where('user_id', $user_id)
                    ->whereDate('date', date('Y-m-d'))
                    ->get();
        $t->load('user');
        $t->load('box');
        return $t;
        
    }
}
