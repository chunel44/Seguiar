<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::orderBy('id', 'DESC')->paginate(5);
        return response()->json($data);
    }
    public function show($slug)
    {
        return Post::where('slug', $slug)->first();
    }
}
