<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template.index');
    }

    public function about(){
        return view('template.about');
    }
    public function service(){
        $customers = Customer::all();
        return view('template.service',compact('customers'));
    }
}
