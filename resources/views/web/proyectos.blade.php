@extends('layouts.frontend.app')

@section('content')
    <header>
        <div class="productos-header" style="background-image: url('{{asset('frontend/img/seguiar_2.jpg')}}')">
            <h1 class="text-uppercase proyectos-titulo">Proyectos</h1>
            <p class="proyectos-subtitulo">Esta ha sido la experiencia de <strong>SEGUIAR</strong> con nuestros clientes</p>

            <div class="borderleft">
            </div>
            <div class="borderright"></div>
        </div>
    </header>

    <div class="wrapper2">
        <div class="section">
            <div style="margin: 50px auto;" class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="proyectos-imagen">
                            <img width="100%" height="100%" src="{{asset('frontend/img/cjpf-tijuana/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Edificio <br>(cjpf)</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">tijuana</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'cjpf', 'ciudad'=>'tijuana'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proyectos-imagen abajo">
                            <img width="100%" height="100%" src="{{asset('frontend/img/abs-cuernavaca/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Edificio Sede<br>(abs)</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">cuernavaca</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'abs', 'ciudad'=>'cuernavaca'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proyectos-imagen">
                            <img width="100%" height="100%" src="{{asset('frontend/img/inoxidable-ensenada/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Edificio Sede<br>(inoxidable)</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">Cuernavaca</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'inoxidable', 'ciudad'=>'Cuernavaca'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="proyectos-imagen">
                            <img width="100%" height="100%" src="{{asset('frontend/img/inoxidable-morelia/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Edificio<br>Sede</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">morelia</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'inoxidable', 'ciudad'=>'morelia'])}}" class="proyectos-plus" address="true"></a>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="proyectos-imagen abajo">
                            <img width="100%" height="100%" src="{{asset('frontend/img/inoxidable-cuernavaca/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Pjf Inoxidable</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">ensenada</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'Inoxidable', 'ciudad'=>'ensenada'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="proyectos-imagen abajo">
                            <img width="100%" height="100%" src="{{asset('frontend/img/sede-tijuana/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Edificio<br>sede</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">tijuana</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'sede', 'ciudad'=>'tijuana'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="proyectos-imagen">
                            <img width="100%" height="100%" src="{{asset('frontend/img/tpu-ensenada/1.jpg')}}">
                            <p class="centered text-uppercase proyectos-nombre">Pjf (poliuretano)</p>
                            <p class="centered-sub text-uppercase proyectos-subnombre">ensenada</p>
                            <a href="{{route('proyectos.details',['proyecto'=>'tpu', 'ciudad'=>'ensenada'])}}" class="proyectos-plus" address="true"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection