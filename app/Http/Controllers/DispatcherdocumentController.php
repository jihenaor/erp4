<?php

namespace App\Http\Controllers;

use App\Models\Dispatcherdocument;
use Illuminate\Http\Request;

class DispatcherdocumentController extends Controller
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
        $dispatcherdocument = new Dispatcherdocument();
        $dispatch->document_id = $request->document_id;
        $dispatch->dispatch_id = $request->dispatch_id;
        
        if ($dispatcherdocument->save()) {
            return $dispatcherdocument;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispatcherdocument  $dispatcherdocument
     * @return \Illuminate\Http\Response
     */
    public function show(Dispatcherdocument $dispatcherdocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dispatcherdocument  $dispatcherdocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispatcherdocument $dispatcherdocument)
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
        $dispatcherdocument = Dispatcherdocument::findOrFail($id);
        $dispatch->document_id = $request->document_id;
        $dispatch->dispatch_id = $request->dispatch_id;

        if ($dispatcherdocument->save()) {
            return $dispatcherdocument;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispatcherdocument  $dispatcherdocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispatcherdocument $dispatcherdocument)
    {
        //
    }
}
