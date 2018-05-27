<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use DB;

class FormController extends Controller
{
   
     	public function getForm()
     	{
               $users = DB::table('users')->paginate(10);
               return view('form', ['users' => $users]);
     	}
     	public function postForm(UserRequest $request)
     	{
     		$user = new User;
     		$user->nom = $request->input('nom');
     		$user->prenom = $request->input('prenom');
     		$user->codepostal = $request->input('codepostal');
     		$user->ville = $request->input('ville');
     		$user->email = $request->input('email');
     		$request->file('photo')->move('resources\photos');
     		$user->save();
               $users = DB::table('users')->paginate(10);
     		return view('form', ['users' => $users]);
     	}

}
