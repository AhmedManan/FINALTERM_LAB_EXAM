<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;



class EmployeeController extends Controller
{
    public function index(Request $req){

       $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();
        return view('employee.employeehome')->with('user',$user);
    }


}



/*

$inventories= new invertory();
$userinfo->id="1";
$userinfo->name="manan";
$userinfo->save();



*/