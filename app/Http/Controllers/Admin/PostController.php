<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index',compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.post.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            $image->move('post', $imageName);

        } else {
            $imageName = "default.png";
        }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->name = $request->title;
        $post->excerpt = $request->excerpt;
        $post->slug = $slug;
        $post->file = $imageName;
        $post->body = $request->body;
        $post->category_id = 1;
        if(isset($request->status))
        {
            $post->status = 'PUBLISHED';
        }else {
            $post->status = 'DRAFT';
        }
        $post->save();


        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.post.edit',compact('post','categories'));
    }

    public function update(Request $request, Post $post)
    {
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }
//            delete old post image
            if($post->file)
            {
                File::delete('post/'.$post->file);
            }
            //$request->file->storeAs('post/',$imageName);
            $image->move('post', $imageName);

        } else {
            $imageName = $post->file;
        }

        $post->user_id = Auth::id();
        $post->name = $request->title;
        $post->excerpt = $request->excerpt;
        $post->slug = $slug;
        $post->file = $imageName;
        $post->body = $request->body;
        $post->category_id = 1;
        if(isset($request->status))
        {
            $post->status = 'PUBLISHED';
        }else {
            $post->status = 'DRAFT';
        }
        $post->save();

        Toastr::success('Post Successfully Updated :)','Success');
        return redirect()->route('admin.post.index');
    }

    public function destroy(Post $post)
    {
        if ($post->file)
        {
            File::delete('post/'.$post->file);
        }
        $post->delete();
        Toastr::success('Post Successfully Deleted :)','Success');
        return redirect()->back();
    }

}
