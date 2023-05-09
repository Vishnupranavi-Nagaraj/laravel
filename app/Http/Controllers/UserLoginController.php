<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    /**
     * Register new users,save in Database and generate the token
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        $token = $user->createToken('Oauth')->accessToken;
        return response()->json(['token' => $token], 200);
    }

     /**
     * Register new users,save in Database and generate the token
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $data = $request->only('email','password');
        $user = User::where('email',$request->email)->first();
        if($user){
            if($request->password === $user->password) {
                $token = $user->createToken('Oauth')->accessToken;
                return response()->json(['token' => $token], 200);
            }
        }
    }
}
