<?php

namespace App\Http\Controllers;

use App\Models\Paymenttermdetail;
use Illuminate\Http\Request;

class PaymenttermdetailController extends Controller
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
        $paymenttermdetail = new Paymenttermdetail();
        $paymenttermdetail->type = $request->type;
        $paymenttermdetail->value = $request->value;
        $paymenttermdetail->expiration = $request->expiration;
        $paymenttermdetail->expirationtype = $request->expirationtype;
        $paymenttermdetail->paymentterm_id = $request->paymentterm_id;

        if ($paymenttermdetail->save()) {
            return $paymenttermdetail;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paymenttermdetail  $paymenttermdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Paymenttermdetail $paymenttermdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymenttermdetail  $paymenttermdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymenttermdetail $paymenttermdetail)
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
        $paymenttermdetail = Paymenttermdetail::findOrFail($id);
        $paymenttermdetail->type = $request->type;
        $paymenttermdetail->value = $request->value;
        $paymenttermdetail->expiration = $request->expiration;
        $paymenttermdetail->expirationtype = $request->expirationtype;
        $paymenttermdetail->paymentterm_id = $request->paymentterm_id;

        if ($paymenttermdetail->save()) {
            return $paymenttermdetail;
        }
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymenttermdetail  $paymenttermdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymenttermdetail $paymenttermdetail)
    {
        //
    }
}
