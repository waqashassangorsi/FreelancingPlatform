<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class UserController extends Controller
{
    public function registerusers(Request $request){

		return $request;
		
		$model = new User();
		$model->firstname= $request->post('firstname');
		$model->lastname= $request->post('lastname');
		$model->email= $request->post('email');
		$model->country= $request->post('country');
		$model->password= $request->post('password');
		$model->accounttype= $request->post('accounttype');
		$model->status = 1;
		$model->save();
		// return $request->post(); 
		
    }
}
