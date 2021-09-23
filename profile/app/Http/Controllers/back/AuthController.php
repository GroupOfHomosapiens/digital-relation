<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
    	
    	return view('back.auth.login');
    }

    public function loginPost(Request $request)
    {
       //dd('sadf');
        
    	if(Auth::guard('admin')->attempt(['login'=>$request->login,'password'=>$request->password])){
             toastr()->success('Tekrardan Hosgeldiniz ' . Auth::guard('admin')->user()->name);
            // dd($request->all());
    		return redirect()->route('admin.index');
    	}
    	return redirect()->route('admin.login')->withErrors('Email addressiniz yada kodunyz yalnys');
        /**
         * undocumented constant
         **/
    

    }

   

     public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect()->route('admin.login');
    }
}
