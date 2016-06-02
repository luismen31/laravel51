<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
class AdminController extends Controller
{
    public function showUser(){
    	
    	return view('admin.index');
    }

    public function editUser($id){
    	$user = User::find($id);
    	dd($user);
    }

    // public function storeUser(Request $request){
    // 	$rules = [
    // 		'name' => 'required',
    // 		'email' => 'required|email'
    // 	];

    // 	$this->validate($request, $rules);

    // 	$user->name = $request->get('name');
    // 	$user->save();

    // 	return redirect()->route('showUser');
    // }
}
