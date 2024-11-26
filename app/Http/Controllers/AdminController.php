<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function login(){
        return view('login');
    }

    public function cekLogin(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        
        $data_user = $request->only(["username","password"]);
        if(auth()->guard('admin')->attempt($data_user)){
            return redirect('/');
        }
        return redirect()->back();
    }
    public function Logout(Request $request){
        auth()->guard("admin")->logout();
        return redirect('/login');
    }
}
