<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdloginController extends Controller
{

    public function index(){
        return view('admin_login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $admin = Admin::where('email',$email)->first();
            Auth::login($admin);
            return redirect('/Admin_Dash');
        }else{
            return back()->withErrors(['Invalid credentials!']);
        }
    }





}
