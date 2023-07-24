<?php

namespace App\Http\Controllers;

use App\Models\Registrations;
use Illuminate\Http\Request;
use App\Models\Projects;
// use Hash;
use Illuminate\support\Facades\Hash;
use Session;
use Crypt;
use Illuminate\Support\Facades\Auth;

class registercontroller extends Controller
{


  public function login()
  {
    return view('login');


  }
  public function loginuser(Request $request)
  {
    $project = new Projects;

   $request->validate([
        'email'=>'required|email',
        'password'=>'required'
   ]);

   $user=Projects::where('email','=',$request->email)->first();
   if($user){
           if(Hash::check($request->password,$user->password)){
            $request->session()->put('logindId',$user->id);
              return redirect('/interface');
           }
           else{
               return back()->with('incorrect password');
           }
   }
   else{

 return back()->with('fail','incorrect email'); 
 }
  
    
    
    
  }


  public function register(Request $request)
  {
    $project = new Projects;

    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:projects',
      'password' => 'required'
    ]);



    $project->name = $request->name;
    $project->email = $request->email;
    $project->password =Hash::make($request->password);
    
    $project->save();


    if ($project) {
      return back()->with('success', 'Registered succesfully');
    } else {
      return back()->with('fail', 'something wrong');
    }

  }
  public function interface(){
    return view('interface');

  }
  public function logout(){
    $data=array();
    if(Session::has('loginId')){
  Session::pull('loginId');
  return redirect(); 
    }
   
  }
  public function show(Request $request){
            $data=Projects::all();

            $data2=compact('data');
            return view('show')->with($data2);


  }
}