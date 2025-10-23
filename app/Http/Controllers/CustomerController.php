<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    // we will implement CRUD Operations so we will add functions to create, read, update and delete

    // ----------------------------------------- C ---------------------------------------------------------
    public function create1(){
        $c1 = new Customer();
        $c1->first_name = "Ali";
        $c1->last_name = "Ibrahim";
        $c1->address = "baabda";
        $c1->save();
        return "ok customer has been created";
    }
    public function create2(){
        Customer::create([
           'first_name'=>"Elio",
           'last_name'=>"Sassin",
           'address'=>"zahle"
        ]);
        return "ok customer has been created";
    }
    public function create3(){
        DB::table('customers')->insert([
            ['first_name' => 'Madrid', 'last_name' => 'Portugal','address'=>"data"]
        ]);
        return "ok customer has been created";

    }
    public function create4(Request $request){
      // Method 1
        $c1 = new Customer();
        $c1->first_name = $request->first_name;
        $c1->last_name = $request->last_name;
        $c1->address = $request->address;
        $c1->save();

        // Method 2
        Customer::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address
        ]);

        // Method 3
        DB::table('customers')->insert([
            ['first_name' => $request->first_name, 'last_name' => $request->last_name,'address'=>$request->address]
        ]);

        return "done";
    }
    public function create5(Request $request){
        Customer::create($request->all());
        return "done";
    }


    // ----------------------------------------- U ---------------------------------------------------------

    public function update1($id){
        // find --> select by id
        $c1 = Customer::find($id);
        $c1->first_name = "Elio";
        $c1->last_name = "Sarkis";
        $c1->address = "Zahle";
        $c1->save();
         return "done";
    }

    public function update2(){
        Customer::where("address",'Zahle')
            ->update(['last_name'=>"Tanoury",'first_name'=>"Lea"]);
        return "done all";
    }

    public function update3(){
        $obj = Customer::find(3);
        $obj->fill([
           'first_name'=>"Bahij",
           'last_name'=>"bahij",
           'address'=>'zahle'
        ]);
        $obj->save();
        return "done";
    }

    public function update4($id,Request $request){
        $c1 = Customer::find($id);
//        $c1->first_name = $request->first_name;
//        $c1->last_name = $request->last_name;
//        $c1->address = $request->address;


        $c1->fill([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address
        ]);

        $c1->save();
        return "ok";
    }


    public function update5($id,Request $request){
        $c1 = Customer::find($id);
        $c1->fill($request->all());
        if($c1->isClean()){
            return "same values please send a new value";
        }
        $c1->save();
        return "ok";
    }

    // ----------------------------------------- D ---------------------------------------------------------

    public function delete1($id){
        $c1 = Customer::find($id);
        $c1->delete();
        return "the customer has been deleted";
    }

    public function delete2(){
        Customer::where('address','Zahle')
            ->delete();
        return "all customers from zahle are deleted";
    }

    // ----------------------------------------- R ---------------------------------------------------------


    public function getById($id){
    // select * from customers where id=1
    $data = Customer::find($id);
//    $data = Customer::findOrFail($id);
//      $data = Customer::findOr($id,function(){
//            return "no customer found";
//        });
    return $data;
    }

    public function getAll(){
        // select * from customers;
        $data = Customer::all();
        return $data;
    }

    public function getByCondition(){
        // when using get you are retrieving an array
        $data = Customer::where('address','lebanon2')->get();

        // if you want to get the first occurence
        $data = Customer::where('address','lebanon2')->first();
//        $data = Customer::where('address','lebanon22')->firstOrFail();

        return $data;
    }

    public function getByCondition2(){
        $data = Customer::where('id','<=',5)->get();
        return $data;
    }

    public function getByMultipleCondition(){
        $data = Customer::where('id','>',1)
            ->where('address','lebanon')
            ->get();
        return  $data;
    }

    public function getByConditionOr(){
        $data = Customer::where('id','>',1)
            ->Orwhere('address','lebanon')
            ->get();
        return  $data;
    }

    public function getLike(){
        // select * form customere where address like %leb%;
        $data = Customer::where('address','like','%leb%')->get();
        return $data;
    }

    public function getIn(){
        //select * from customers where id in (1,2,3,4);
        $data= Customer::whereIn('id',[1,2,3,4,5,6])->get();
        return $data;
    }

    public function getBetween(){
        $data = Customer::whereBetween('id',[1,5])->get();
        return $data;
    }

    public function getConditionSelect(){
        // select first_name, last_name from customeres where address=lebanon2;
        $data = Customer::select(['first_name','last_name','id'])->where('address','lebanon2')
//            ->orderBy('id')
                ->orderBy('id','desc')
            ->get();
        return $data;
    }

    public function getLimit(){
        // select * from customers where address=lebanon limit 2
        $data = Customer::where('address','lebanon')->take(3)->get();
        return $data;
    }

    public function stats(){
        $count = Customer::where('address','lebanon')->count();
        $sum = Customer::where('address','lebanon')->sum('id');
        $maxId = Customer::where('address','lebanon')->max('id');
        $minId = Customer::where('address','lebanon')->min('id');
        $avg = Customer::where('address','lebanon')->avg('id');
        return $avg;
    }

    public function join(){
        $data = Customer::join('credentials','customers.id','credentials.customer_id')
        ->select(['customers.first_name','customers.last_name','credentials.email','credentials.password'])
        ->get();
        return $data;
    }


}
