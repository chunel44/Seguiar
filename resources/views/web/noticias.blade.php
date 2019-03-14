@extends('layouts.frontend.app')

@section('css')
<style>
    footer{
        position: absolute;
        width: 100%;
        bottom: 0;
    }

    html {
        position: relative;
        min-height: 100%;
    }

    body {
        /* Margin bottom by footer height */
        margin-bottom: 350px;
    }
</style>
@endsection

@section('content')
    <div class="wrapper3">
        <div style="padding: 35px 0;" id="app" class="section">
                {{--<div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 foto text-center">
                                <img class="img-not" src="https://preview.ibb.co/i0PmHk/1.jpg">
                            </div>
                            <div class="col-md-6 texto">
                                <div class="headline">
                                    <div class="head-texto">
                                        HEADLINE 1
                                    </div>
                                </div>
                                <div class="noticia-texto">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta viverra velit sed porta. Sed porttitor sodales risus id malesuada. Nam nec maximus risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi tristique quam id lectus eleifend tristique.
                                </div>
                                <button class="btn btn-mas">MÁS <i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <noticias ></noticias>
        </div>

    </div>
@endsection
