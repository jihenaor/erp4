<?php

namespace App\Http\Controllers;

use App\Models\Itemdispatch;
use Illuminate\Http\Request;

class ItemdispatchController extends Controller
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
        $itemdispatch = new Itemdispatch();
        $itemdispatch->qty = $request->qty;
        $itemdispatch->weigth = $request->weigth;
        $itemdispatch->width = $request->width;
        $itemdispatch->heigth = $request->height;
        $itemdispatch->item_id = $request->item_id;
        $itemdispatch->dispatch_id = $request->dispatch_id;

        if ($itemdispatch->save()) {
            return $itemdispatch;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itemdispatch  $itemdispatch
     * @return \Illuminate\Http\Response
     */
    public function show(Itemdispatch $itemdispatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itemdispatch  $itemdispatch
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemdispatch $itemdispatch)
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
        $itemdispatch = Itemdispatch::findOrFail($id);
        $itemdispatch->qty = $request->qty;
        $itemdispatch->weigth = $request->weigth;
        $itemdispatch->width = $request->width;
        $itemdispatch->heigth = $request->height;
        $itemdispatch->item_id = $request->item_id;
        $itemdispatch->dispatch_id = $request->dispatch_id;

        if ($itemdispatch->save()) {
            return $itemdispatch;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemdispatch  $itemdispatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemdispatch $itemdispatch)
    {
        //
    }
}
