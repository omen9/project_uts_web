<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index()
    {
       return view('welcome');
    }
    public function login()
    {
       return view('login');
    }
    public function register()
    {
       return view('register');
    }
    public function about()
    {
       return view('about');
    }
    public function product()
    {
       return view('product');
    }
    public function article()
    {
       return view('article');
    }
}