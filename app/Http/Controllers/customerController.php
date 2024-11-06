<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
class customerController extends Controller
{
    public function index()
    {
        $customers = customer::all();
        // catching data fr db ke customer index
        return view('customer.index', ['customers'=>$customers]);
    }

    public function create() {
        return view("customer.create");
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
        ]);

        $newCustomer = Customer::create($data);
        return redirect(route('customer.index'));
    }

    public function edit(customer $customer) {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request ,customer $customer) {
        $validateData = $request->validate([
            'name'=>'required|string|max:255',
            'phone'=>'required|string|max:12',
            'email'=>'required|email|max:255'
        ]);

        $customer->update($validateData);

        return redirect()->route('customer.index')->with("success", "customer update successfully");
    }
}
