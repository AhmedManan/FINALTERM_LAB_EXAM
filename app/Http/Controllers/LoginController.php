<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class LoginController extends Controller
{
    public function index(Request $req){
       
        $username= $req->username;
        $password = $req->password;



        $user = user::where('username',$username)
                          ->where('password',$password)
                          ->first();
        if(!empty($user)){
            $req->session()->put('sessionusername',$user->username);//session creation
            $req->session()->put('sessionusertype',$user->usertype);
            if($user->usertype=="admin"){

                return redirect('/admin');

            }
            if($user->usertype=="employee"){

                return redirect('/employee');

            }
        }
        else{
            return redirect('/home');
        }


    }
}
