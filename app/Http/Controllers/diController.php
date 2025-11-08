<?php

namespace App\Http\Controllers;

use App\Services\LoggingService;
use Illuminate\Http\Request;

class diController extends Controller
{

    public $globalService ;

    public function __construct(LoggingService $s){
        $this->globalService = $s;
    }

    public function old(){
        $service = new LoggingService();
        $service->addLog("this is my content using old way");
        return "ok";
    }

    public function methodDi(LoggingService $service){
        $service->addLog("this is my content using old di method");
        return "ok";
    }

    public function f1(){
        $this->globalService->addLog("from f1");
    }

    public function f2(){
        $this->globalService->addLog("from f2");
    }
}
