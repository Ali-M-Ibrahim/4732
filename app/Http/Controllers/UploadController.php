<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UploadController extends Controller
{
    public function list(){
        $data  = Image::all();
        return view('upload.list',compact('data'));
    }

    public function create(){
        return view('upload.form');
    }

    public function method1(Request $request){
        $request->validate([
            'document' => 'mimes:jpg,bmp,png'
        ]);
        if($request->hasFile('document')){
          // to get the name of the file
            $fileName = $request->file('document')->getClientOriginalName();

            $newName = time() . "-" . $fileName;

            // to create a copy of the file in the public folder under myimages directory
            $request->file('document')->move('myimages',$newName);

            // to store it in database
            $img = new Image();
            $img->name = $fileName;
            $img->path = 'myimages/'.$newName;
            $img->save();

            return "ok done";
        }else{
            return "document was not received";
        }
    }

    public function method2(Request $request){
        $request->validate([
            'document' => 'mimes:jpg,bmp,png'
        ]);
        if($request->hasFile('document')){
            // to get the name of the file
            $fileName = $request->file('document')->getClientOriginalName();

            $newName = time() . "-" . $fileName;

            // to create a copy of the file in the storage folder under myimages directory
            $request->file('document')->storeAs('myimages',$newName,'public');

            // to store it in database
            $img = new Image();
            $img->name = $fileName;
            $img->path = 'storage/myimages/'.$newName;
            $img->save();

            return "ok done";
        }else{
            return "document was not received";
        }
    }

    public function method3(Request $request){
        $request->validate([
            'document' => 'mimes:jpg,bmp,png'
        ]);
        if($request->hasFile('document')){
            // to get the name of the file
            $fileName = $request->file('document')->getClientOriginalName();
            // to create a copy of the file in the storage folder under myimages directory
            $newName = $request->file('document')->store('myimages','public');

            // to store it in database
            $img = new Image();
            $img->name = $fileName;
            $img->path = 'storage/'.$newName;
            $img->save();

            return "ok done";
        }else{
            return "document was not received";
        }
    }

    public function hash(){
        $hashed = Hash::make("123");

        $checking = Hash::check("13323",$hashed);
        return $checking;
    }
}
