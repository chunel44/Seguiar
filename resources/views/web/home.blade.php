@extends('layouts.frontend.app')

@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{{asset('frontend/img/home/principal.png')}}')">
                    <h2 class="titulo-home text-uppercase">Guiamos<br>tu camino</h2>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{asset('frontend/img/home/Podotactiles.jpg')}})">
                    <h2 class="titulo-2 text-uppercase">Guías<br>podotáctiles</h2>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{asset('frontend/img/home/Braille.jpg')}})">
                    <h2 class="titulo-2 text-uppercase">Señalética<br>en braille</h2>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <a href="#" class="scroll-down" address="true"></a>
        </div>
    </header>
    <div class="wrapper2">
        <div class="section quienes">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 somos">
                        <div class="text-box">
                            <p>¿QUIÉNES SOMOS?</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h2 class="info">Empresa 100% Chihuahuense con una visión clara sobre la importancia de espacios adaptados para la inclusión. <br> Somos una empresa Mexicana dedicada a ofrecer las mejores opciones y los mejores precios de productos en materia de adaptabilidad en el país.​<br>Ofrecemos lo último en tecnología de señalización y habilitación de espacios para invidentes y débiles visuales.</h2>
                    </div>
                </div>
            </div>
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon fill="white" points="0,100 100,0 100,100" class="poly"/>
            </svg>
        </div>
        <div class="section">
            <div class="container">
                <div class="titulo text-center productos">PRODUCTOS</div>

                <div class="productos-grid">
                    <div style="margin:0;" class="row">
                        <div class="col-md-6 no-padding">
                            <img class="full-width" src="{{asset('frontend/img/home/Podotactiles.jpg')}}">
                        </div>
                        <div class="col-md-6 no-padding box-prod">
                            <h2 class="titulo-producto">GUÍAS PODOTÁCTILES</h2>
                            <h3 class="texto-producto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta viverra velit sed porta. Sed porttitor sodales risus id malesuada. Nam nec maximus risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</h3>
                            <a href="{{route('productos')}}" class="btn btn-ver">VER MÁS <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div style="margin:0;" class="row">
                        <div class="col-md-6 no-padding box-prod">
                            <h2 class="titulo-producto">PLACAS DE SEÑALÉTICA EN BRAILLE</h2>
                            <h3 class="texto-producto">Fabricadas en materiales de la más alta calidad como Alucobond, Acrilico, PVC y Plástico Ada. Letras en relieve o en Vinyl, con Rasters de acero inoxidable. Todo para garantizar un producto durable y estético.</h3>
                            <a href="{{route('productos')}}" class="btn btn-ver">VER MÁS <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-6 no-padding"><img class="full-width" src="{{asset('frontend/img/home/Braille.jpg')}}"></div>
                    </div>
                </div>
                <div class="row">
                    <div style="padding: 80px 0;" class="col-md-12 text-center">
                        <a href="{{route('productos')}}" type="button" class="btn btn-productos">VER PRODUCTOS <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-yellow">
            <div class="container">
                <div class="row">
                    <div class="gal" style="padding: 85px 0;">
                        <a  data-fancybox="gallery" href="{{asset('frontend/img/home/1.jpg')}}"><figure><img src="{{asset('frontend/img/home/1.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/podotactiles.jpg')}}"><figure><img src="{{asset('frontend/img/home/podotactiles.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/2.jpg')}}"><figure><img src="{{asset('frontend/img/home/2.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/3.jpeg')}}"><figure><img src="{{asset('frontend/img/home/3.jpeg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/4.jpg')}}"><figure><img src="{{asset('frontend/img/home/4.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/5.jpg')}}"><figure><img src="{{asset('frontend/img/home/5.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/6.jpg')}}"><figure><img src="{{asset('frontend/img/home/6.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/7.jpg')}}"><figure><img src="{{asset('frontend/img/home/7.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/braille.jpg')}}"><figure><img src="{{asset('frontend/img/home/braille.jpg')}}" alt=""></figure></a>
                        <a data-fancybox="gallery" href="{{asset('frontend/img/home/8.jpg')}}"><figure><img src="{{asset('frontend/img/home/8.jpg')}}" alt=""></figure></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-bottom: 35px;" class="section">
            <div class="container">
                <div class="row">
                    <div class="card arr">
                        <div class="card-header1 text-center">
                            ÚLTIMAS NOTICIAS
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 foto text-center">
                                    <img class="img-not" src="post/{{$post->file}}">
                                </div>
                                <div class="col-md-6 texto">
                                    <div class="headline">
                                        <div class="head-texto">
                                            {{$post->name}}
                                        </div>
                                    </div>
                                    <div class="noticia-texto">
                                        {{$post->excerpt}}
                                    </div>
                                    <a href="{{route('noticia.details',['slug'=>$post->slug])}}" class="btn btn-mas">MÁS <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clientes">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <h2 class="titulo-clientes">NUESTROS CLIENTES</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class="iconos-clientes">
                            <div class="col-md-3 icn">
                                <img style="position: relative;top: 50%;width: 135px;" src="{{asset('frontend/img/logos/bc.png')}}">
                            </div>
                            <div class="col-md-3 icn">
                                <img src="{{asset('frontend/img/logos/EscudoPJF_Peque_Transp.png')}}">
                            </div>
                            <div class="col-md-3 icn">
                                <img src="{{asset('frontend/img/logos/image001.png')}}">
                            </div>
                            <div class="col-md-3 icn">
                                <img style="position: relative;top: 50%;width: 135px;" src="{{asset('frontend/img/logos/logCJFBandera_Lg_blue.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container-fluid" style="margin-top: 60px;">
                        <div class="iconos-clientes">
                            <div class="col-md-4 icn">
                                <img style="width: 85px;" src="{{asset('frontend/img/logos/logof.png')}}">
                            </div>
                            <div class="col-md-4 icn">
                                <img style="width: 235px;position: relative;top: 50%;bottom: 50%;" src="{{asset('frontend/img/logos/scjn-logo.png')}}">
                            </div>
                            <div class="col-md-4 icn">
                                <img  src="{{asset('frontend/img/logos/unnamed.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection