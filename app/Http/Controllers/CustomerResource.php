<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mylist = Customer::all();
        return view('customer.list',compact('mylist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'first_name'=>'required|min:3|max:5|unique:customers'  ,
           'last_name'=>'required',
           'address'=>'required',
//            'password'=>'required|same:c_password'
            'password'=>'required|confirmed'
        ],
        [
            'required'=> "The :attribute is required please add it "
        ]);
        Customer::create($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obj = Customer::findOrFail($id);
        return view('customer.view',compact('obj'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obj = Customer::findOrFail($id);
        return view('customer.edit',compact('obj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obj = Customer::findOrFail($id);
        $obj->fill($request->all());
        $obj->save();
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obj = Customer::findOrFail($id);
        $obj->delete();
        return redirect()->route('customer.index');
    }
}
