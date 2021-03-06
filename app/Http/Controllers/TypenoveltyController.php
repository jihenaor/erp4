<?php

namespace App\Http\Controllers;

use App\Models\Typenovelty;
use Illuminate\Http\Request;

class TypenoveltyController extends Controller
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
        $typenovelty = new Typenovelty();
        $typenovelty->name = $request->name;

        if ($typenovelty->save()) {
            return $typenovelty;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typenovelty  $typenovelty
     * @return \Illuminate\Http\Response
     */
    public function show(Typenovelty $typenovelty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typenovelty  $typenovelty
     * @return \Illuminate\Http\Response
     */
    public function edit(Typenovelty $typenovelty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typenovelty = Typenovelty::findOrFail($id);
        $typenovelty->name = $request->name;

        if ($typenovelty->save()) {
            return $typenovelty;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typenovelty  $typenovelty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typenovelty $typenovelty)
    {
        //
    }
}
