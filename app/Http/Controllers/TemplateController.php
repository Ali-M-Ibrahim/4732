<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class TemplateController extends Controller  implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'middleware1',

        ];
    }

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
