<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Term;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $l = Item::All();
        $l = Item::with('terms')->get();
/*
        $l=Item::with(['itemterm'=> function($q){

            return $q->belongsTo(Term::class);
        }])->get();
        */
/*
        $l->map(function ($item) {

        });
*/
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
        $item = new Item();
        $item->ref = $request->ref;
        $item->name = $request->name;
        $item->canbesold = $request->canbesold;
        $item->canbebought = $request->canbebought;
        $item->barcode = $request->barcode;
        $item->notes = $request->notes;
        $item->urlimage = $request->urlimage;

        if ($item->save()) {
            return $item;
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
        $item = Item::findOrFail($id);
        $item->ref = $request->ref;
        $item->name = $request->name;
        $item->canbesold = $request->canbesold;
        $item->canbebought = $request->canbebought;
        $item->barcode = $request->barcode;
        $item->notes = $request->notes;
        $item->urlimage = $request->urlimage;

        if ($item->save()) {
            return $item;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
