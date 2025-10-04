<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function index(){
        return "hello i am index function from first controller";
    }

    function details($id){
        return "I am details functon and the id is: " . $id;
    }

    function json(){
        return response()->json(["data"=>"124"]);
    }
}
