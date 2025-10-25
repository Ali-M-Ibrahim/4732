<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('page1');
    }

    public function listCustomers(){
        $data = Customer::all();
        $title = "List Customers - C001";
        $this->prepareData();
        return view('listCustomers',['mylist'=>$data,'title'=>$title]);
    }

    public function viewCustomer($id){
        $obj = Customer::findOrFail($id);
        $title = "View Customer - C002";
        $this->prepareData();
        return view('viewCustomer',compact('obj','title'));
    }

    public function viewCustomer2($id){
        $obj = Customer::findOrFail($id);
        $title = "View Customer - C002";
        return view('viewCustomer')->with('obj',$obj)
            ->with('title',$title);
    }

    public function prepareData(){
        $name= "Antonine University";
        $telephone = "12354588";
        \View::Share(['name'=>$name,'telephone'=>$telephone]);
    }

    public function addCustomer(){
        return view('addCustomer');
    }

    public function storeCustomer(Request $request){
//        $c1 = new Customer();
//        $c1->first_name = $request->first_name;
//        $c1->last_name = $request->last_name;
//        $c1->address = $request->address;
//        $c1->save();

        Customer::create($request->all());

        return redirect()->route('list-customer');
    }

    public function deleteCustomer($id){
        $obj = Customer::findOrFail($id);
        $obj->delete();
        return redirect()->route('list-customer');
    }

    public function editCustomer($id){
        $obj = Customer::findOrFail($id);
        return view('editCustomer',compact('obj'));
    }

    public function updateCustomer($id, Request $request){
        $obj = Customer::findOrFail($id);
        $obj->fill($request->all());
        $obj->save();
        return redirect()->route('list-customer');
    }
}
