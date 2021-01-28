<?php

namespace App\Http\Controllers;

use App\Models\Taxitem;
use Illuminate\Http\Request;

class TaxitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $taxitems = Taxitem::All();
       $taxitems->load('tax');
       return $taxitems;
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
     * @param  \App\Models\Taxitem  $taxitem
     * @return \Illuminate\Http\Response
     */
    public function show(Taxitem $taxitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taxitem  $taxitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Taxitem $taxitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taxitem  $taxitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taxitem $taxitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taxitem  $taxitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taxitem $taxitem)
    {
        //
    }
}
