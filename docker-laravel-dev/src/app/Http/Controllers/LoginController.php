<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function signin(){
        return view("user_signin");
    }
    public function check(Request $request){
        $user=$request->only("name","password");
        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect(route(""));
        }
        return back()->with(["Message"=>"アカウントまたはパスワードが違います"]);
    }
        public function signout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect(route("login"));
    }
}
