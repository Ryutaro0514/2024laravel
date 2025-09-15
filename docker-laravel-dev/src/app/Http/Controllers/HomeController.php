<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function event()
    {
        return view("event");
    }
    public function spot()
    {
        return view("spot");
    }
    public function log()
    {
        return view("log");
    }
}
