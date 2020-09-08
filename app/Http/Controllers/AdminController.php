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
 
 
         $user = userinfo::all();
         $userinfo = User::where('username',$username)
        ->first();
         return view('admin.users')->with('user',$user)->with('userinfo',$userinfo);
     }

     public function viewProfile(Request $req,$usernameprofile){

        $username= $req->session()->get('sessionusername');


        $user = Login_cred::where('username',$username)
        ->first();
        $userinfo = User_info::where('username',$username)
        ->first();

        $userprofile = Login_cred::where('username',$usernameprofile)
        ->first();
        $userinfoprofile = User_info::where('username',$usernameprofile)
        ->first();
      
        return view('admin.viewprofile')->with('user',$user)
                                             ->with('userinfo',$userinfo)
                                             ->with('userprofile',$userprofile)
                                             ->with('userinfoprofile',$userinfoprofile);
                                             

     }

     public function viewProfilePost(Request $req,$usernameprofile){
        $userprofile = Login_cred::where('username',$usernameprofile)
        ->first();
        $userinfoprofile = User_info::where('username',$usernameprofile)
        ->first();

         $firstname=$req->firstname;
         $lastname=$req->lastname;
         $email=$req->email;
         $phone=$req->phone;
         $phone=$req->phone;
         $nid_no=$req->nid_no;
         $gender=$req->gender;
         $usertype=$req->usertype;
        if($req->submit=="update"){

            if($firstname!=""){
             $userinfoprofile->first_name=$firstname;
             $userinfoprofile->last_name=$lastname;
             $userinfoprofile->email=$email;
             $userinfoprofile->phone=$phone;
             $userinfoprofile->nid_no=$nid_no;
             $userinfoprofile->gender=$gender;
             $userprofile->usertype=$usertype;
             $userinfoprofile->save();
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