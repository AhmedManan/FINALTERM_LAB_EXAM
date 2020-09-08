<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\job;



class EmployeeController extends Controller
{
    public function index(Request $req){

       $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();
        return view('employee.employeehome')->with('user',$user);
    }

    public function register(Request $req){

        $username= $req->session()->get('sessionusername');


        $user = user::where('username',$username)
        ->first();

        return view('employee.register')->with('user',$user);
     }

     public function registerPost(Request $req){

       

        $jobs= new job();
        $jobs->company=$req->company;
        $jobs->title=$req->title;
        $jobs->location=$req->location;
        $jobs->salary=$req->salary;     
        $jobs->save();

        return redirect('/employee/register');
     }

}



/*

$inventories= new invertory();
$userinfo->id="1";
$userinfo->name="manan";
$userinfo->save();



*/