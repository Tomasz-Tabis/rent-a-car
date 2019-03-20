<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
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
        $users = Customer::all();
        return view('admin/customer/index-customer')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/customer/add-customer');
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
            'first_letters' => 'required|string',
            'prefix' => 'string|nullable',
            'last_name' => 'required|string',
            'street' => 'required|string',
            'postal_code' => 'required|string',
            'residence' => 'required|string',
            'username' => 'string|nullable',
            'password' => 'string|nullable'
        ]);

        $customer = new Customer();
        $customer->first_letters = $request->first_letters;
        $customer->prefix = $request->prefix;
        $customer->last_name = $request->last_name;
        $customer->street = $request->street;
        $customer->postal_code = $request->postal_code;
        $customer->residence = $request->residence;
        $customer->username = $request->username;
        $customer->password = $request->password;
        $customer->save();

        return view('admin/customer/add-customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin/customer/detail-customer')->with('user', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
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
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        return back();
    }
}
