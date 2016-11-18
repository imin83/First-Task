<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\MyUser;

class MyUsersController extends Controller
{
    //
    public function store(Request $request, MyUser $myUser){
    	$this->validate($request, [
	    	'email' => 'required|email|unique:myUsers',
	        'username' => 'required|unique:myUsers|alpha_num',
	        'password' => 'required',
	    ]);
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// $card->notes()->create(
    	// 	['body' => $request->body
    	// ]);

    	$myUser = new MyUser;
    	$myUser->email = $request->email;
    	$myUser->username = $request->username;
    	$myUser->password = Hash::make($request->password);

    	$myUser->save();

    	return back();
    }

    public function index(){
    	$myUsers = MyUser::all();

    	return view ('data',compact('myUsers'));
    }
}
