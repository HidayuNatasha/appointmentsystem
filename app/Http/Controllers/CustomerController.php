<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller

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
        $customer = Customer::has('user')->where('user_id',auth()->user()->id)->get(); 
        return view('customer.profile',compact('customer'));
    }

    public function dashboard()
    {
       
        return view('customer.dashboard');
    }

    public function indexAdmin()
    {
        $customer = Customer::all();

        return view('customer.indexAdmin',compact('customer'));
    }

     /**
     * edit pasal customer
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

      /**
     * masukkan updated info dlm database
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'custName' => 'required',
        ]);
  
        $customer->update($request->all());
  
        return redirect()->route('customer.profile')
                        ->with('success','customer updated successfully');
    }
}
