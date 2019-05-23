<?php

namespace dokimi\Http\Controllers;

use dokimi\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acustomers = Customer::where('status', 1)->paginate(2);

        $icustomers = Customer::where('status', 0)->paginate(2);


        // return view('customers.list', [
        //     'acustomers' => $acustomers,
        //     'icustomers' => $icustomers
        // ]);

        return view('customers.list', compact('acustomers', 'icustomers'));
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
    public function store()
    {
        // dd(request()->all());

        $data = request()->validate([
            'name' => 'required|min:5|max:255|string',
            'email' => 'required|email|max:255',
            'status' => 'required'
        ]);

         $customer = new Customer();

         $customer->name = request('name');
         $customer->email = request('email');
         $customer->status = request('status');

         $customer->save();

         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
