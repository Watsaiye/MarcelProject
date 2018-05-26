<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class FormController extends Controller
{
   
     	public function getForm()
     	{
     		return view('form');
     	}
     	public function postForm(UserRequest $request)
     	{
     		$user = new User;
     		$user->user = $request->input('user');
     		$user->save();
     		return view('form');
     	}
}
