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
    public function index()
    {
        return view('login');
    }

    public function customLogin(AuthRequest $request)
    {
        echo "vbnm,.";
        exit();
    }

    public function register()
    {
        return view('register');
    }

    
}

