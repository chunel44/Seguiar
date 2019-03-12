@extends('layouts.frontend.app')

@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                @for($i = 1; $i <= $prod->fotos; $i++)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="background-image: url('{{asset('frontend/img/'.$prod->proyectoNombre.'-'.$prod->proyectoLugar.'/'.$i.'.jpg')}}')"></div>
                @endfor
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <h2 class="titulo-proyecto text-uppercase">{{$prod->proyectoNombre}}</h2>
            <h3 class="subtitulo-proyecto text-uppercase">{{$prod->proyectoLugar}}</h3>
            <a href="#" class="scroll-down-p" address="true"></a>
        </div>
    </header>
<div class="wrapper2">
    <div class="container">
        <div class="row">
            <div style="margin-left: auto;margin-right: auto; background: #f4f4f4" class="card arr">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="producto-nombre">{{$prod->nombre}}</h2>
                            <h3 class="producto-ciudad">{{$prod->ciudad}}</h3>
                            <p class="materiales">Materiales</p>
                            <h3 class="producto-materiales">{{$prod->materiales}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection