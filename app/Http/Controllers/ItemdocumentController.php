<?php

namespace App\Http\Controllers;

use App\Models\Itemdocument;
use Illuminate\Http\Request;

class ItemdocumentController extends Controller
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

    private function initFields(Request $request, Itemdocument $itemdocument) {
        $itemdocument->description = $request->description;
        $itemdocument->qty = $request->qty;
        $itemdocument->unitvalue = $request->unitvalue;
        $itemdocument->document_id = $request->document_id;
        $itemdocument->item_id = $request->item_id;

        return $itemdocument;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemdocument = new Itemdocument();

        $itemdocument = $this->initFields($request, $itemdocument);

        if ($itemdocument->save()) {
            return $itemdocument;
        }

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
        $itemdocument = Itemdocument::findOrFail($id);

        $itemdocument = $this->initFields($request, $itemdocument);

        if ($itemdocument->save()) {
            return $itemdocument;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemdocument  $itemdocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemdocument $itemdocument)
    {
        //
    }
}
