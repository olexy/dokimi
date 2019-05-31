<?php

namespace dokimi\Http\Controllers;

use dokimi\Company;
use dokimi\Customer;
use Illuminate\Http\Request;
use dokimi\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use dokimi\Events\NewCustomerRegistrationEvent;

class CustomersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acustomers = Customer::active();

        $icustomers = Customer::inactive();

        $companies = Company::all();

        $customer = new Customer();

        return view('customers.index', compact('acustomers', 'icustomers', 'companies', 'customer'));
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
        $this->authorize('create', Customer::class);

        $customer = Customer::create($this->validateRequest());

        $this->storeImage($customer);

        event(new NewCustomerRegistrationEvent($customer));

        return redirect('customers')->with('success', 'Customer saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // $customer = Customer::where('id', $customer)->firstOrFail();

        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());

        $this->storeImage($customer);

         return redirect('customers/' . $customer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $this->authorize('delete', $customer);

        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:5|max:255|string',
            'email' => 'required|email|max:255',
            'status' => 'required',
            'company_id' => 'required',
            'image' => 'sometimes|file|image|max:5000',
        ]);
    }

    // private function validateRequest()
    // {
    //     return tap(request()->validate([

    //         'name' => 'required|min:5|max:255|string',
    //         'email' => 'required|email|max:255',
    //         'status' => 'required',
    //         'company_id' => 'required',
    //     ]), function(){

    //         if(request()->hasFile('image')){
    //             request()->validate([
    //                 'image' => 'file|image|max:5000',
    //             ]);
    //         }
    //     });
    // }

	public function storeImage($customer)
	{
		if(request()->has('image')) {
            $customer->update([
                'image' => request()->image->store('uploads/customers', 'public')
            ]);

            $image = Image::make(public_path('storage/' . $customer->image))->fit(300, 300);

            $image->save();
        }
	}
}
