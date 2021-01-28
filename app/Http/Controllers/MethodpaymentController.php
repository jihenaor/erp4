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

    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required'],
        ]);

        Methodspayments::create([
                'name' => $request->name
        ]);

        return $request->name;
    }

    public function destroy(Methodspayments $r)
    {
        $r->delete();
        return 'ok';
    }
}
