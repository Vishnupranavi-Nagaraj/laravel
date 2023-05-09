<?php

namespace App\Http\Controllers;
use Session;
use App\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customLogin(AuthRequest $request)
    {
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function register()
    {
                //$data['password'] = Hash::make($data['password']);


    }

    
}

