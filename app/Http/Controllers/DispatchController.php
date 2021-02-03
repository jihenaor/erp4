<?php

namespace App\Http\Controllers;

use App\Models\Dispatch;
use Illuminate\Http\Request;

class DispatchController extends Controller
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
        $dispatch = new Dispatch();
        $dispatch->customer_id = $request->customer_id;
        $dispatch->carrier_id = $request->carrier_id;
        $dispatch->name = $request->name;
        $dispatch->address = $request->address;
        $dispatch->city = $request->city;
        $dispatch->schedule = $request->schedule;
        $dispatch->guidenumber = $request->guidenumber;
        $dispatch->deliverydate = $request->deliverydate;
        //$dispatch->dispatcher_id = $request->dispatcher_id;
        //$dispatch->receiver_id = $request->receiver_id;

        if ($dispatch->save()) {
            return $dispatch;
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function show(Dispatch $dispatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispatch $dispatch)
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
        $dispatch = Dispatch::findOrFail($id);
        $dispatch->customer_id = $request->customer_id;
        $dispatch->carrier_id = $request->carrier_id;
        $dispatch->name = $request->name;
        $dispatch->address = $request->address;
        $dispatch->city = $request->city;
        $dispatch->schedule = $request->schedule;
        $dispatch->guidenumber = $request->guidenumber;
        $dispatch->deliverydate = $request->deliverydate;
        //$dispatch->dispatcher_id = $request->dispatcher_id;
        //$dispatch->receiver_id = $request->receiver_id;

        if ($dispatch->save()) {
            return $dispatch;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispatch $dispatch)
    {
        //
    }
}
