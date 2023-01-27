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
        $data = Customer::latest()->paginate(5);
        return view ('customers.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cust_name' => 'required',
            'cust_username' => 'required',
            'cust_password' => 'required',
            'cust_bod' => 'required',
            'cust_gender' => 'required',
            'cust_address' => 'required',
            'cust_idcard' => 'required',
        ]);

        $file_name = time() . '.' . request()->cust_idcard->getClientOriginalExtension();

        request()->cust_idcard->move(public_path('img/customer'), $file_name);

        $cust = new customer;

        $cust->cust_name = $request->cust_name;
        $cust->cust_username = $request->cust_username;
        $cust->cust_password = $request->cust_password;
        $cust->cust_bod = $request->cust_bod;
        $cust->cust_gender = $request->cust_gender;
        $cust->cust_address = $request->cust_address;
        $cust->cust_idcard = $file_name;

        $cust->save();

        return redirect()->route('customers.index')->with('success', 'Selected data customer has been successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'cust_name' => 'required',
            'cust_username' => 'required',
            'cust_password' => 'required',
            'cust_bod' => 'required',
            'cust_gender' => 'required',
            'cust_address' => 'required',
            'cust_idcard' => 'required',
        ]);

        $cust_idcard = $request->hidden_cust_idcard;
        if($request->cust_idcard != '')
        {
            $cust_idcard = time() . '.' . request()->cust_idcard->getClientOriginalExtension();
            request()->cust_idcard->move(public_path('img/customer'), $cust_idcard);
        }

        $customer = Customer::find($request->hidden_id);
        $customer->cust_name = $request->cust_name;
        $customer->cust_username = $request->cust_username;
        $customer->cust_password = $request->cust_password;
        $customer->cust_bod = $request->cust_bod;
        $customer->cust_gender = $request->cust_gender;
        $customer->cust_address = $request->cust_address;
        $customer->cust_idcard = $cust_idcard;

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Selected data customer has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Selected data customer has been successfully deleted');
    }
}
