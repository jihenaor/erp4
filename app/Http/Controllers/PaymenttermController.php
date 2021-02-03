<?php

namespace App\Http\Controllers;

use App\Models\Paymentterm;
use Illuminate\Http\Request;

class PaymenttermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l=Paymentterm::with('paymenttermdetail')->get();
      
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
        $paymentterm = new Paymentterm();
        $paymentterm->name = $request->name;
        $paymentterm->description = $request->description;

        if ($paymentterm->save()) {
            return $paymentterm;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paymentterm  $paymentterm
     * @return \Illuminate\Http\Response
     */
    public function show(Paymentterm $paymentterm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymentterm  $paymentterm
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymentterm $paymentterm)
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
        $paymentterm = Paymentdetail::findOrFail($id);
        $paymentterm->name = $request->name;
        $paymentterm->description = $request->description;

        if ($paymentterm->save()) {
            return $paymentterm;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymentterm  $paymentterm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymentterm $paymentterm)
    {
        //
    }

}
