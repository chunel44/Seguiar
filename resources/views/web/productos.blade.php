@extends('layouts.frontend.app')

@section('content')
    <header>
        <div class="productos-header" style="background-image: url('{{asset('frontend/img/seguiar_1.jpg')}}')">
            <h1 class="text-uppercase productos-titulo">nuestros <br><p class="mdsa">productos</p></h1>

            <div class="borderleft">
            </div>
            <div class="borderright"></div>
        </div>
    </header>
    <div class="wrapper2">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="prod-grid">
                        <h2 class="text-uppercase prod1">placas de señalética en braile</h2>
                    </div>
                    <div class="col-md-12">
                        <hr class="linea-productos">

                        <p class="placas-info">Fabricadas en materiales de la más alta calidad como Aluconond y Acrilico.
                            Letras en relieve o en Vinyl, con Rasters de acero inoxidable.
                            Todo para garantizas un producto durable y estético.</p>

                        <img class="img-producto" src="{{asset('frontend/img/seguiar_2.jpg')}}">
                    </div>
                    <div class="prod-grid">
                        <h2 class="text-uppercase prod1">placas de señalética en braile</h2>
                    </div>
                    <div class="col-md-12">
                        <hr class="linea-productos">
                        <div style="padding:35px 0;" class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 6; $i++)
                                                <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/acero-inoxidable/'.$i.'.png')}}')">
                                                </div>
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
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 class="titulo-cards text-uppercase">
                                            acero inoxidable
                                        </h2>
                                        <p class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/caucho-sintetico/'.$i.'.jpg')}}')">
                                                    </div>
                                                @endfor
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 class="titulo-cards text-uppercase">
                                            caucho sintético
                                        </h2>
                                        <p class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 9; $i++)
                                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/plastico-tpu/'.$i.'.jpg')}}')">
                                                    </div>
                                                @endfor
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 class="titulo-cards text-uppercase">
                                            tpu poliuretano termoplástico
                                        </h2>
                                        <p style="padding: 24px 20px;" class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:35px 0;" class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 2; $i++)
                                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/concreto-poli/'.$i.'.png')}}')">
                                                    </div>
                                                @endfor
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 class="titulo-cards text-uppercase">
                                            concreto polimérico
                                        </h2>
                                        <p class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/plastico-abs/'.$i.'.png')}}')">
                                                    </div>
                                                @endfor
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 style="font-size: 23px" class="titulo-cards text-uppercase">
                                            Acrinolitino butadieno estireno (abs)
                                        </h2>
                                        <p style="padding: 0 20px;" class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header no-padding">
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                @for($i = 1; $i <= 4; $i++)
                                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}" style="height:350px; background-image: url('{{asset('frontend/img/caucho-sbr/'.$i.'.png')}}')">
                                                    </div>
                                                @endfor
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body background-verde size-prod">
                                        <h2 class="titulo-cards text-uppercase">
                                            Caucho sbr
                                        </h2>
                                        <p class="info-cards">Las guías metálicas de acero inoxidable marca SEGUIAR, proveen de una superficie detestable para la orientación y ubicación de personas con discapacidad visual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid text-center no-padding">
                <a target=”_blank”  href="{{asset('frontend/pdf/catalogo.pdf')}}" class="btn btn-catalogo text-uppercase">
                    descarga el catálogo aquí
                </a>
                <svg style="position: relative;bottom: 92px;" class="line" viewBox="00 00 100 1" preserveAspectRatio="none" >
                    <line x1="00" y1="0" x2="100" y2="00"></line>
                </svg>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection