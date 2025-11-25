<?php

namespace App\Traits;

trait APIResponse
{
    public function successResponse($data=null,$code=200){
        return response(["code"=>$code, "data"=>$data,'success'=>true],$code);
    }

    public function errorResponse($data=null,$code=500){
        return response(["error_message"=>$data,'success'=>false],$code);
    }

}
