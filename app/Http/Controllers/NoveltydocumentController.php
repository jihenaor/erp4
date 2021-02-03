<?php

namespace App\Http\Controllers;

use App\Models\Noveltydocument;
use Illuminate\Http\Request;

class NoveltydocumentController extends Controller
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
        $noveltydocument = new Noveltydocument();
        $noveltydocument->date = $request->date;
        $noveltydocument->description = $request->description;
        $noveltydocument->email = $request->email;
        $noveltydocument->document_id = $request->document_id;
        $noveltydocument->typenovelty_id = $request->typenovelty_id;
        $noveltydocument->user_id = $request->user_id;

        if ($noveltydocument->save()) {
            return $noveltydocument;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noveltydocument  $noveltydocument
     * @return \Illuminate\Http\Response
     */
    public function show(Noveltydocument $noveltydocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noveltydocument  $noveltydocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Noveltydocument $noveltydocument)
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
        $noveltydocument = Noveltydocument::findOrFail($id);
        $noveltydocument->date = $request->date;
        $noveltydocument->description = $request->description;
        $noveltydocument->email = $request->email;
        $noveltydocument->document_id = $request->document_id;
        $noveltydocument->typenovelty_id = $request->typenovelty_id;
        $noveltydocument->user_id = $request->user_id;

        if ($noveltydocument->save()) {
            return $noveltydocument;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noveltydocument  $noveltydocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noveltydocument $noveltydocument)
    {
        //
    }
}
