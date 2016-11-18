<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyUser;

class PagesController extends Controller
{
    //
    public function home(){
    	return view ('main');
    }

    public function data(){
    	$myUsers = MyUser::all();

    	return view ('data',compact('myUsers'));
    }
}
