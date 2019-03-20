@extends('layouts.frontend.app')

@section('content')
    <header class="wrapper3">
        <div class="noticia-header" style="background-image: url('../post/{{$post->file}}')">
            <div class="headline-noticia">
                <div class="head-texto2">
                    NOTICIAS
                </div>
            </div>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="titulo-noticia">{{$post->name}}</h2>

                    <div class="contenido-noticia">
                        {!! $post->body !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection