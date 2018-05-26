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
     		$user->nom = $request->input('nom');
     		$user->prenom = $request->input('prenom');
     		$user->codepostal = $request->input('codepostal');
     		$user->ville = $request->input('ville');
     		$user->email = $request->input('email');
     		$user->save();
     		return view('form');
     	}
}
