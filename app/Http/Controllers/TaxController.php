<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tax::All();
        //return Tax::where('id', '=', '2')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tax = new Tax();
        $tax->name = $request->name;
        $tax->factor = $request->factor;

        if ($tax->save()) {
            return $tax;
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
        $tax = Tax::findOrFail($id);
        $tax->name = $request->name;
        $tax->factor = $request->factor;

        if ($tax->save()) {
            return $tax;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Tax::findOrFail($id);

        if ($t->delete()) {
            return $t;
        }
    }
}
