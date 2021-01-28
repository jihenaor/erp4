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

    public function store(DocumenttypeRequest $request)
    {
        $validator = Validator::make($request->all(),[
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


        return $request->name;
    }

    public function destroy(Documenttypes $r)
    {
        $r->delete();
        return'ok';
    }
}
