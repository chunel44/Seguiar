<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

   public function index(){
       $post = Post::inRandomOrder()->first();
       return view('web.home', compact('post'));
   }

    public function noticias()
    {
        return view('web.noticias');
    }

    public function contacto()
    {
        return view('web.contacto');
    }

    public function proyectos()
    {
        return view('web.proyectos');
    }

    public function productos()
    {
        return view('web.productos');
    }

    public function noticia($slug)
    {
        //dd($slug);
        $post = Post::where('slug',$slug)->first();

        //$blogKey = 'blog_' . $post->id;

       /* if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }*/
        return view('web.noticia',compact('post'));
    }

    public function proyecto($proyecto, $ciudad){

       $prod = Projects::where('proyectoNombre', $proyecto)->where('proyectoLugar', $ciudad)->first();

       return view('web.proyecto', compact('prod'));
    }
}
