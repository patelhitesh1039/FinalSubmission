<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function viewLogin(){
        return view('auth.login');
    }
    
    function Authlogin(Request $request){
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user()
            ]);
        } else {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

    }


    function viewRegister(){
        return view('auth.register');
    }
    function Authregister(Request $request){
        $user_create =  new User;
        $user_create->name = $request->name;
        $user_create->email= $request->email;
        $user_create->password = Hash::make($request->password);
        $user_create->save();
        
        Auth::login($user_create);

        if($user_create){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'User created succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'User created failed!'
            ];
            return $response;
        }
    }

    public function index()
    {
        return view('lang');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
}
