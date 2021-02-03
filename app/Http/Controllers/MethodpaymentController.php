<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Methodspayments;

class MethodpaymentController extends Controller
{
    //
    public function index()
    {
        return Methodspayments::all();
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'name'      => ['required'],
        ]);

        Methodspayments::create([
                'name' => $request->name
        ]);

        return $request->name;*/

        $methodpayment = new Methodpayment();
        $methodpayment->name = $request->name;
       
        if ($methodpayment->save()) {
            return $methodpayment;
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
        $methodpayment = Methodpayment::findOrFail($id);
        $methodpayment->name = $request->name;
       
        if ($methodpayment->save()) {
            return $methodpayment;
        }
    }


    public function destroy(Methodspayments $r)
    {
        $r->delete();
        return 'ok';
    }
}
