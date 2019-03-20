<?php

namespace App\Http\Controllers;

use App\Mail\VentasEmail;
use App\Projects;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

    public function contactoP(Request $request){

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'empresa' => 'required',
            'tipo' => 'required',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'ciudad' => 'required',
            'estado' => 'required',
            'ayudarte' => 'required',
        ],[
            'nombre.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'empresa.required' => 'El nombre de la empresa es requerido',
            'tipo.required' => 'El tipo de la empresa es requerido',
            'telefono.required' => 'El teléfono es requerido',
            'ciudad.required' => 'La ciudad es requerido',
            'estado.required' => 'El estado es requerido',
            'ayudarte.required' => 'Escribe un mensaje',
            'telefono.numeric' => 'El telefono solo admite numeros',
            'email.email' => 'Formato de email es incorrecto',
          ]);

        if ($validator->passes()){
            $objDemo = new \stdClass();
            $objDemo->nombre = $request->nombre;
            $objDemo->email = $request->email;
            $objDemo->tipo = $request->tipo;
            $objDemo->empresa = $request->empresa;
            $objDemo->ciudad = $request->ciudad;
            $objDemo->estado = $request->estado;
            $objDemo->telefono = $request->telefono;
            $objDemo->mensaje = $request->ayudarte;
            $objDemo->nosotros = $request->nosotros;

            Mail::to('ventas@seguiar.mx')->send(new VentasEmail($objDemo));
            return response()->json([
                'success' => true,
                'message' => 'record updated'
            ], 200);
        }
        $errors = $validator->errors()->all();
        return response()->json([
            'success' => false,
            'message' => $errors
        ], 422);
    }
}
