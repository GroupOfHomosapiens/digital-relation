<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Admin;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
   use ApiResponser;


    public function register(Request $request)
    {
        
         $request->validate([
            'username' => 'required',
            'password' => 'required',
            'select' => 'required',
            'select1' => 'required'
            
        ]);
      
        $user = User::create([
            'login' => $request->username,
            'password' =>bcrypt($request->password),
            'faculties_name' => $request->select,
            'functions' => $request->select1,
            'remember_token' => $request->checkbox
        ]);
        //dd(Auth::guard('sanctum'));
        
        return response()->json([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    
             
    }

     public function login(Request $request)
    {
       
        $attr = [
            "login" => $request->login,
            "password" => $request->password,
            "faculties_name" => $request->faculties_name,
            "functions" => $request->functions
        ];
       // dd(!Auth::guard('api')->user());

        if (!Auth::guard('api')->user()) {
            return $this->error('Credentials not match', 401);
        }

        $user = User::where('login',$request->login)->where('password',$request->password)->where('faculties_name',$request->faculties_name)->where('functions',$request->functions)->first();
  if($user){
    $success['token'] =  $user->createToken('MyApp')->accessToken;
    return response()->json(['success' => $success], 201);
}else{
    return response()->json(['error'=>'Unauthorised'], 401);
}
    }

    public function users()
    {
        $users = Admin::all();
        return response()->json($users);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    public function test()
    {
        $users = Admin::all();
        return response()->json($users);
    }
}

//40bT2zf0JFFetyi6cKV7gQYUM1hBTRYFXDtoUi83
