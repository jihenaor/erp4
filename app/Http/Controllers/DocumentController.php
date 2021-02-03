<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
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
        $document = new Document();
        $document->customer_id = $request->customer_id;
        $document->documenttype_id = $request->documenttype_id;
        $document->paymentterm_id = $request->paymentterm_id;
        $document->user_id = $request->user_id;
        $document->box_id = $request->box_id;
        $document->consecutive = $request->consecutive;
        $document->date = $request->date;
        $document->paymentreference = $request->paymentreference;
        $document->duedate = $request->duedate;
        $document->expirationdays = $request->expirationdays;
        $document->email = $request->email;
       
        if ($document->save()) {
            return $document;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
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
        $document = Document::findOrFail($id);
        $document->customer_id = $request->customer_id;
        $document->documenttype_id = $request->documenttype_id;
        $document->paymentterm_id = $request->paymentterm_id;
        $document->user_id = $request->user_id;
        $document->box_id = $request->box_id;
        $document->consecutive = $request->consecutive;
        $document->date = $request->date;
        $document->paymentreference = $request->paymentreference;
        $document->duedate = $request->duedate;
        $document->expirationdays = $request->expirationdays;
        $document->email = $request->email;

        if ($document->save()) {
            return $document;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
