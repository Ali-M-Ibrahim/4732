<?php

use App\Http\Controllers\diController;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\InvokController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CustomerResource;
use App\Http\Controllers\UploadController;



Route::get('/', function () {
    return view('welcome');
});

Route::get("route1",function(){
   return "Hello I am your first route";
});

Route::get("route2",function(){
   return 1+1;
});

Route::get("route3",function(){
    $data = [
        ["name"=>"Ali", "id"=>201310171],
        ["name"=>"Elio","id"=>12334]
    ];
    return response()->json($data);

//   return response()->json([ "code"=>"Web 2", "name"=> "Web Programing 2" ]);
});


Route::get("route4",function(Request $request){
    $token_val = $request->header("token");
    $token2_val = $request->header("token2");
   return "hi the token sent in header is: " . $token2_val;
});


Route::get("route5/{id}",function($id){
   return "the value of the id is: " .  $id;
});

Route::get("route6/{id}/{name}",function($id2,$name2){
   $data = [
       "id"=>$id2,
       "name"=>$name2
   ];
   return $data;
});

Route::get("route7",function(Request $request){
    $data = [
        "id"=>$request->input("id","default values"),
        "name"=>$request->name,
    ];
    return $data;
});

Route::get("route8",function(Request $request){
   return response()->json(["data"=>"123"])
   ->header("key1","123")
       ->header("key2","568");
});

Route::get("route9",function(Request $request){
    return response()->json(["data"=>"123"])
        ->withHeaders([
            "key1"=>"123",
            "key2"=>456
        ]);
});



Route::get("route10/{id?}",function($id=0){
    return "the value of the id is: " .  $id;
});

Route::get("route11",function(){
    $data = [
        "id"=>"!@3",
        "name"=>"asdsd"
    ];
   return response($data,201);
});

Route::get("route12",function(){
    $data = [
        "id"=>"!@3",
        "name"=>"asdsd"
    ];
    return response($data,Response::HTTP_NO_CONTENT);
});


Route::get("route13",function(Request $request){
    $token = $request->header("token");
    if($token=="123"){
        $data = [
            "id"=>"1234",
            "name"=>"Asdasdasd"
        ];
        return $data;
    }else{
        abort(500);
    }
});

Route::post("post-data",function(Request $request){
    $data = [
        "id"=>$request->input("id","default values"),
        "name"=>$request->name,
    ];
    return $data;
});

//Method 1
Route::get("route14",[FirstController::class, "index"]);
Route::get("route15/{id}",[FirstController::class, "details"]);
Route::get("route16",[FirstController::class, "json"]);

//Method 2
Route::get("route17",'App\Http\Controllers\FirstController@index');

//Method 3
Route::get("route18",[
    'uses'=> "App\Http\Controllers\FirstController@index"
]);

// Basic controller
// php artisan make:controller CONTROLLER_NAME

// Resource Controller
//php artisan make:controller CONTROLLER_NAME --resource

Route::resource("test",SecondController::class);
//    ->except(["index"]);
//->only(['create','index']);

// API Controller
//php artisan make:controller CONTROLLER_NAME --api

Route::apiResource('product',ApiController::class);


//Invokable Controller
//php artisan make:controller CONTROLLER_NAME --invokable


Route::get("test2",InvokController::class);


Route::get('data',[DataController::class,'index']);


Route::get("create1",[CustomerController::class,'create1']);
Route::get("create2",[CustomerController::class,'create2']);
Route::get("create3",[CustomerController::class,'create3']);
Route::post("create4",[CustomerController::class,'create4']);
Route::post("create5",[CustomerController::class,'create5']);
Route::get("update1/{id}",[CustomerController::class,'update1']);
Route::get("update2",[CustomerController::class,'update2']);
Route::get("update3",[CustomerController::class,'update3']);
Route::put('update4/{id}',[CustomerController::class,'update4']);
Route::put('update5/{id}',[CustomerController::class,'update5']);
Route::get("delete1/{id}",[CustomerController::class,'delete1']);
Route::get("delete2",[CustomerController::class,'delete2']);
Route::get("getById/{id}",[CustomerController::class,'getById']);
Route::get("getAll",[CustomerController::class,'getAll']);
Route::get("getByCondition",[CustomerController::class,'getByCondition']);
Route::get("getByCondition2",[CustomerController::class,'getByCondition2']);
Route::get("getByMultipleCondition",[CustomerController::class,'getByMultipleCondition']);
Route::get("getByConditionOr",[CustomerController::class,'getByConditionOr']);
Route::get("getLike",[CustomerController::class,'getLike']);
Route::get("getIn",[CustomerController::class,'getIn']);
Route::get("getBetween",[CustomerController::class,'getBetween']);
Route::get("getConditionSelect",[CustomerController::class,'getConditionSelect']);
Route::get("getLimit",[CustomerController::class,'getLimit']);
Route::get("stats",[CustomerController::class,'stats']);
Route::get("join",[CustomerController::class,'join']);



Route::get('page1',[WebsiteController::class,'index']);

Route::get('list-customers',[WebsiteController::class,'listCustomers'])->name('list-customer');
Route::get('view-customer/{id}',[WebsiteController::class,'viewCustomer'])->name('view-single-customer');
Route::get('view-customer2/{id}',[WebsiteController::class,'viewCustomer2']);
Route::get('add-customer',[WebsiteController::class,'addCustomer'])->name('add-customer');
Route::post('store-customer',[WebsiteController::class,'storeCustomer'])->name('store-customer');
Route::delete('deleteCustomer/{id}',[WebsiteController::class,'deleteCustomer'])->name('delete-customer');
Route::get('deleteCustomer2/{id}',[WebsiteController::class,'deleteCustomer'])->name('delete-customer2');
Route::get('edit-customer/{id}',[WebsiteController::class,'editCustomer'])->name('edit-customer');
Route::put('update-customer/{id}',[WebsiteController::class,'updateCustomer'])->name('update-customer');


Route::resource('customer',CustomerResource::class);
Route::get('deleteCustomer/{customer}',[CustomerResource::class,'destroy'])->name('deleteCustomer');

Route::get('list-image',[UploadController::class,'list']);

Route::get('add-image',[UploadController::class,'create']);
Route::post('upload-image1',[UploadController::class,'method1'])->name('method1');
Route::post('upload-image2',[UploadController::class,'method2'])->name('method2');
Route::post('upload-image3',[UploadController::class,'method3'])->name('method3');

Route::get("hash",[UploadController::class,'hash']);



Route::get('first-page',[WebsiteController::class,'firstPage']);
Route::get('second-page',[WebsiteController::class,'secondPage']);


Route::get('index',[TemplateController::class,'index'])->name('home');
Route::get('about',[TemplateController::class,'about'])->name('about');
Route::get('service',[TemplateController::class,'service'])->name('service');

Route::get('old',[diController::class,'old']);
Route::get('methodDi',[diController::class,'methodDi']);
Route::get('dif1',[diController::class,'f1']);
Route::get('dif2',[diController::class,'f2']);


