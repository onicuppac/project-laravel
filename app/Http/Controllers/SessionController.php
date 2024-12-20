<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view ('sesi/index');
    }
    
    function login(Request $request){
        Session::flash('email',$request->email);
        $datalogin=[
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($datalogin)){
            return redirect('/beranda')->with(['pesan' => 'Login Berhasil']);
        }
        else {
            return redirect('/')->with(['pesan' => 'Email dan Password Tidak sesuai']);
        }

    }
}
