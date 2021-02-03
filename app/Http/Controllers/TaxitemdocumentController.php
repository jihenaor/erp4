<?php

namespace App\Http\Controllers;

use App\Models\Taxitemdocument;
use Illuminate\Http\Request;

class TaxitemdocumentController extends Controller
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
        $taxitemdocument = new Taxitemdocument();
        $taxitemdocument->factor = $request->factor;
        $taxitemdocument->value = $request->value;
        $taxitemdocument->tax_id = $request->tax_id;
        $taxitemdocument->itemdocument_id = $request->itemdocument_id;

        if ($taxitemdocument->save()) {
            return $taxitemdocument;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taxitemdocument  $taxitemdocument
     * @return \Illuminate\Http\Response
     */
    public function show(Taxitemdocument $taxitemdocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taxitemdocument  $taxitemdocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Taxitemdocument $taxitemdocument)
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
        $taxitemdocument = Taxitemdocument::findOrFail($id);
        $taxitemdocument->factor = $request->factor;
        $taxitemdocument->value = $request->value;
        $taxitemdocument->tax_id = $request->tax_id;
        $taxitemdocument->itemdocument_id = $request->itemdocument_id;

        if ($taxitemdocument->save()) {
            return $taxitemdocument;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taxitemdocument  $taxitemdocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taxitemdocument $taxitemdocument)
    {
        //
    }
}
