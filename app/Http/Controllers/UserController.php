<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class UserController extends Controller {
   
// Home page
   public function index(){
      $link = file_get_contents(resource_path('users.json'));
      $data['users'] = json_decode($link);
      return view('home', $data);
   }

// Add user
   public function addUser(Request $request){

      $validator = Validator::make($request->all(),[
         'name'=>'required',
         'email'=>'required|email',
         'mobile'=>'required',
         'image'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $data = file_get_contents(resource_path('users.json'));
      $data = json_decode($data, true);

      if($request->hasFile('image')){
         $filename=file_get_contents($request->image);
         $image = base64_encode($filename);           
      }else{
         $image = 'imageNotFound';
      }

      //data in out POST
       $input = array(
         'name'=>$request->name,
         'email'=>$request->email,
         'mobile'=>$request->mobile,
         'image'=> $image,
      );

      array_push($data,$input);

      //encode back to json      
      $data = json_encode($data, JSON_PRETTY_PRINT);
      file_put_contents(resource_path('users.json'), $data);

      return back()->with('success','User add successfully');
   }

// edit user
   public function editUser(Request $request){

      $validator = Validator::make($request->all(),[
         'name'=>'required',
         'email'=>'required|email',
         'mobile'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $data = file_get_contents(resource_path('users.json'));
      $data = json_decode($data, true);

      //data in out POST
       $input = array(
         'name'=>$request->name,
         'email'=>$request->email,
         'mobile'=>$request->mobile,
         'image'=>$request->image
      );

      $data[$request->id] = $input;

      //encode back to json      
      $data = json_encode($data, JSON_PRETTY_PRINT);
      file_put_contents(resource_path('users.json'), $data);

      return back()->with('success','User edit successfully');
   }

// delete user
   public function delete($id){

      //fetch data from json
      $data = file_get_contents(resource_path('users.json'));
      $data = json_decode($data, true);
    
      unset($data[$id]);
 
      //encode back to json
      $data = json_encode($data, JSON_PRETTY_PRINT);
      file_put_contents(resource_path('users.json'), $data);
    
      return back()->with('success','User delete successfully');
   }

}

