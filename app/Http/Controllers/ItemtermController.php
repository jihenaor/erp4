<?php

namespace App\Http\Controllers;

use App\Models\Itemterm;
use Illuminate\Http\Request;

class ItemtermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l=Itemterm::All();
        $l->load('item');
        $l->load('term');
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
     * @param  \App\Models\Itemterm  $itemterm
     * @return \Illuminate\Http\Response
     */
    public function show(Itemterm $itemterm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itemterm  $itemterm
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemterm $itemterm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itemterm  $itemterm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemterm $itemterm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemterm  $itemterm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemterm $itemterm)
    {
        //
    }
}
