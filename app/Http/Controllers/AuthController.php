<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function register(Request $request)
    {
      $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
      if($user)
      {
        return redirect()->route('login')->with("User Created Successfully!");
      } else{
        return "User not created!";
      }

    }


    public function login(Request $request)
    {
  
        $user = User::where('email', $request->email)->first();
        
        $users = User::all();
        
        // if($user && Hash::check($request->input('password'), $user->password)) 
        // {
        //   return view('users/index')->with(['users' => $users]);
        // }else{
        //   return "invalid Credentials";
        // }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
          return view('users/index')->with(['users' => $users]);
        }else{
          return "invalid Credentials";
        }

    }


    public function logout(){
      Session::flush();

      Auth::logout();
      return redirect('login');
    }
}
