<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        return view('login');
    }
    public function show(Request $request)
    {
        return view('admin');
    }
}