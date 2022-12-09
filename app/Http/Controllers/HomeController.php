<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['products' => \App\Models\Product::all()]);
    }
}
