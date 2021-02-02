<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l=Customer::All();
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
        $customer = new Customer();
        $customer->identificationtype = $request->identificationtype;
        $customer->identificationnumber = $request->identificationnumber;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->phonenumber = $request->phonenumber;
        $customer->mobilenumber = $request->mobilenumber;
        $customer->email = $request->email;
        $customer->website = $request->website;
        $customer->urlimage = $request->urlimage;
        $customer->type = $request->type;

        if ($customer->save()) {
            return $customer;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->identificationtype = $request->identificationtype;
        $customer->identificationnumber = $request->identificationnumber;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->phonenumber = $request->phonenumber;
        $customer->mobilenumber = $request->mobilenumber;
        $customer->email = $request->email;
        $customer->website = $request->website;
        $customer->urlimage = $request->urlimage;
        $customer->type = $request->type;

        if ($customer->save()) {
            return $customer;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::findOrFail($id);
        if ($customer->delete()) {
            return $customer;
        }
    }
}

