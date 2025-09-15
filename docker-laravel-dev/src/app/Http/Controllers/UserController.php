<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function create(){
        return view("user_signup");
    }
    public function store(Request $request){
        User::query()->create([
            "name"=>$request->name,
            "password"=>Hash::make($request->password)
        ]);
        return redirect(route("login"));
    }
}
