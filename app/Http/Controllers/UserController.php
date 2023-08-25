<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function form() {
        return view('form');
    }

    public function welcome(Request $request) {
        return view('welcome');
    }
}
