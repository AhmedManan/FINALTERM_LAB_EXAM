<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;



class AdminController extends Controller
{
    public function index(Request $req){

       $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();
        return view('admin.adminhome')->with('user',$user);
    }

    public function users(Request $req){

        $username= $req->session()->get('sessionusername');
 
 
         $userinfo = user::all();
         $user = user::where('username',$username)
        ->first();
         return view('admin.users')->with('user',$user)->with('userinfo',$userinfo);
     }

     public function usersearch(Request $req){
        $username= $req->session()->get('sessionusername');
 
 
        $userinfo = user::all();
        $user = user::where('username','like',$req->usersearch.'%')
       ->get();
       return response()->json(array('user'=> $user), 200);
     }

     public function viewProfile(Request $req,$usernameprofile){

        $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();

        $userprofile = user::where('username',$usernameprofile)
        ->first();
      
        return view('admin.viewprofile')->with('user',$user)
                                        ->with('userprofile',$userprofile);
                                             

     }

     public function viewProfilePost(Request $req,$usernameprofile){
        $userprofile = user::where('username',$usernameprofile)
        ->first();

         $name=$req->name;
         $email=$req->email;
         $phone=$req->phone;
         $phone=$req->company;
         $usertype=$req->usertype;
        if($req->submit=="update"){

            if($name!=""){
            
            $userprofile->name=$name;
            $userprofile->email=$email;
            $userprofile->phone=$phone;
            $userprofile->company=$company;
            $userprofile->usertype=$usertype;
            $userprofile->save();
            }
            
           return redirect()->route('admin.viewprofile',$usernameprofile);
        }
        if($req->submit=="delete"){
            $userinfoprofile->delete();
            return redirect("/admin");
        }
        

    }

    public function register(Request $req){

        $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();

        return view('admin.register')->with('user',$user);
     }

     public function registerPost(Request $req){

       

        $users= new user();
        $users->name=$req->name;
        $users->phone=$req->phone;
        $users->company=$req->company;
        $users->email=$req->email;
        $users->username=$req->username;
        $users->password=$req->password;
        $users->usertype=$req->usertype;

       
        $users->save();

        return redirect('/admin/register');
     }
        //  return view('admin.admininventory')->with('user',$user)
        //                                 ->with('userinfo',$userinfo)
        //                                 ->with('inventory',$inventory);
     
    

}



/*

$inventories= new invertory();
$userinfo->id="1";
$userinfo->name="manan";
$userinfo->save();



*/