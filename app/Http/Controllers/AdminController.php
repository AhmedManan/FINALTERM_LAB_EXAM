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

            if($firstname!=""){
            
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

    public function inventory(Request $req){

        $username= $req->session()->get('sessionusername');
 
         $inventory = inventory::all();
         $user = Login_cred::where('username',$username)
         ->first();
         $userinfo = User_info::where('username',$username)
         ->first();
         return view('admin.admininventory')->with('user',$user)
                                        ->with('userinfo',$userinfo)
                                        ->with('inventory',$inventory);
     }

     public function inventoryPost(Request $req){

        $username= $req->session()->get('sessionusername');
 
         $inventory = inventory::all();
         $user = Login_cred::where('username',$username)
         ->first();
         $userinfo = User_info::where('username',$username)
         ->first();

         $item=$req->item;
         $quantity=$req->quantity;
        if($req->submit=="update"){

            if($item!=""){
             $inventory->item=$item;
             $inventory->quantity=$quantity;
             $inventory->save();
            }
            
           return redirect()->route('admin.adminhome',$usernameprofile);
        }
        if($req->submit=="delete"){
            $inventory->delete();
            return redirect("/admin");
        }


        //  return view('admin.admininventory')->with('user',$user)
        //                                 ->with('userinfo',$userinfo)
        //                                 ->with('inventory',$inventory);
     }

}



/*

$inventories= new invertory();
$userinfo->id="1";
$userinfo->name="manan";
$userinfo->save();



*/