<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function product()
    {
        return view('home.product', ['products' => \App\Models\Product::all()]);
    }
    public function post()
    {
        return view(
            'home.post',
            [
                'posts' => \App\Models\Post::latest()
                    ->filter(request(['search']))
                    ->paginate(7)
                    ->withQueryString()
            ]
        );
    }
}
