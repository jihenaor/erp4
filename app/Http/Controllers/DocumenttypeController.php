<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumenttypeRequest;
use Illuminate\Support\Facades\Validator;
use  App\Models\Documenttype;


class DocumenttypeController extends Controller
{
    //
    public function index()
    {
        return Documenttype::all();
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validator = Validator::make($request->all(),[
            'name' => 'required|unique:post|max:45'
        ]
        );
        if($validator->fails()){
            return 'error';
        } else{
            Documenttypes::create([
                'name' => $request->name
        ]);
        }


        return $request->name;*/

        $documenttype = new Documenttype();
        $documenttype->name = $request->name;

        if ($documenttype->save()) {
            return $documenttype;
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
        $documenttype = Documenttype::findOrFail($id);
        $documenttype->name = $request->name;
       
        if ($documenttype->save()) {
            return $documenttype;
        }
    }

    public function destroy(Documenttypes $r)
    {
        $r->delete();
        return'ok';
    }
}
