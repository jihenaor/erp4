<?php

namespace App\Http\Controllers;

use App\Models\Paymentdetail;
use Illuminate\Http\Request;

class PaymentdetailController extends Controller
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
        $paymentdetail = new Paymentdetail();
        $paymentdetail->transactionnumber = $request->transactionnumber;
        $paymentdetail->value = $request->value;

        if ($paymentdetail->save()) {
            return $paymentdetail;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Paymentdetail $paymentdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymentdetail $paymentdetail)
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
        $paymentdetail->transactionnumber = $request->transactionnumber;
        $paymentdetail->value = $request->value;

        if ($paymentdetail->save()) {
            return $paymentdetail;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymentdetail  $paymentdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymentdetail $paymentdetail)
    {
        //
    }
}
