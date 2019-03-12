<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        $all_views = Post::sum('view_count');
        $category_count = Category::all()->count();
        $popular_posts = Post::orderBy('view_count','desc')
            ->take(5)->get();
        return view('admin.dashboard',compact('posts', 'all_views', 'category_count','popular_posts'));
    }

}
