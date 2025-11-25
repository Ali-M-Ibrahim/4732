<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Traits\APIResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{

    use APIResponse;

   public function index(){
       $data = Student::all();
       $response = StudentResource::collection($data);
       return $this->successResponse($response,201);
   }

   public function getStudent(){
       $student = Student::first();
       $response = new StudentResource($student);
       return $this->successResponse($response,201);
   }

   public function create(Request $request){
       $validator = Validator::make($request->all(), [
           'title' => 'required',
           'body' => 'required',
       ]);

       if ($validator->fails()) {
           return $this->errorResponse($validator->errors());
       }

       return $this->successResponse("ok done",201);
   }
}
