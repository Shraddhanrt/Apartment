<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('index.about');
    }
    public function ourteam()
    {
        return view('index.ourteam');
    }
    public function contact()
    {
        return view('index.contact');
    }
    public function blog()
    {
        return view('index.blog');
    }
    public function blog1()
    {
        return view('index.blog1');
    }

    public function apartment()
    {
        return view('index.details');
    }
    public function login()
    {
        return view('index.login');
    }
}
