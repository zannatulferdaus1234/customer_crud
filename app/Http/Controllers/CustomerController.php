<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index',compact('customers'));

    }

    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {

        Customer::create(request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:3|confirmed',
            'dob'=>'required',
            'city'=>'required|string',
            'country'=>'required|string',
            'status'=>'required',

        ]));
        return redirect (route('customers'));
    }

    public function show($id)
    {
        //
    }


    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }


    public function update(Customer $customer)
    {
        $customer->update(request()->validate([
            'name'=>'required',
            // 'email'=>['required','email',Rule::unique('customers')->ignore($customer)],
            'email' => 'required|email|unique:customers,email,'.$customer->id.',id',
            'dob'=>'required',
            'city'=>'required|string',
            'country'=>'required|string',
            'status'=>'required',

        ]));
        return redirect (route('customers'));

    }


    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect (route('customers'));

    }
}
