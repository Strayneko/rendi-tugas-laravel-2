<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class HelperController extends Controller
{
    public function getSlug(Request $request)
    {
        return response()->json([
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->query('title'))
        ]);
    }
}
