<?php

namespace App\Http\Controllers;

use App\Models\Paymentplan;
use Illuminate\Http\Request;

class PaymentplanController extends Controller
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
        $paymentplan = new Paymentplan();
        $paymentplan->percent = $request->percent;
        $paymentplan->value = $request->value;
        $paymentplan->date = $request->date;
        $paymentplan->expiration = $request->expiration;
        $paymentplan->description = $request->description;
        $paymentplan->document_id = $request->document_id;

        if ($paymentplan->save()) {
            return $paymentplan;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paymentplan  $paymentplan
     * @return \Illuminate\Http\Response
     */
    public function show(Paymentplan $paymentplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymentplan  $paymentplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymentplan $paymentplan)
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
        $paymentdetail = Paymentdetail::findOrFail($id);
        $paymentplan->percent = $request->percent;
        $paymentplan->value = $request->value;
        $paymentplan->date = $request->date;
        $paymentplan->expiration = $request->expiration;
        $paymentplan->description = $request->description;
        $paymentplan->document_id = $request->document_id;

        if ($paymentplan->save()) {
            return $paymentplan;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymentplan  $paymentplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymentplan $paymentplan)
    {
        //
    }
}
