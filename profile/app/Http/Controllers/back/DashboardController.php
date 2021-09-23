<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class DashboardController extends Controller
{
    public function index()
    {
    	$auth = Auth::guard('admin')->user();
    	
    	
    	return view('back.dashboard',compact('auth'));
    }
    public function profile()
    {
    		$auth = Auth::guard('admin')->user();
           

           
    	return view('back.profile',compact('auth'));
    }

     public function profileEdit(Request $request)
    {
        $name = $request->name;
        $login = $request->login;
        $faculties_name = $request->faculties_name;
        $functions = $request->functions;
        $password = $request->password;
        $userID = Auth::guard('admin')->id();
        $admin = Admin::find($userID);
        $admin->name = $name;
        $admin->login = $login;
        $admin->faculties_name = $faculties_name;
        $admin->functions = $functions;
        if($password){
            $admin->password = bcrypt($password);
        }
        $admin->save();
        return redirect()->route('admin.index');
    }
}
