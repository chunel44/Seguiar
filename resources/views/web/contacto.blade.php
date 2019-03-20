@extends('layouts.frontend.app')

@section('content')
    <header style="margin-top: 110px;">
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8486125048116!2d-106.0748973776459!3d28.63429899167873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM4JzAzLjEiTiAxMDbCsDA0JzI5LjUiVw!5e0!3m2!1ses-419!2smx!4v1551901256386"
                    width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </header>

    <div class="wrapper2">
        <div class="section" style="margin-top: 50px; margin-bottom: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="headline-contacto">
                            <h2 style="padding-left: 10px;" class="head-texto-contacto">
                                ¡CONTÁCTANOS!
                            </h2>
                        </div>
                        <div class="res-cont">
                            <div class="row ajustar">
                                <div style="padding-left: 0;" class="col-md-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Nombre Completo" name="nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Empresa" name="empresa">
                                    </div>
                                </div>
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Tipo de empresa" name="tipo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Teléfono" name="telefono">
                                    </div>
                                </div>
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Correo electronico" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Ciudad" name="ciudad">
                                    </div>
                                </div>
                                <div style="padding-left: 0;" class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-contacto" placeholder="Estado" name="estado">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-left: 0;" class="col-md-12">
                                    <div class="form-group">
                                        <label for="nosotros">¿Cómo te enteraste de nosotros?</label>
                                        <textarea class="form-contacto" rows="5" name="nosotros"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="padding-left: 0;" class="col-md-12">
                                    <div class="form-group">
                                        <label for="ayudarte">¿En qué podemos ayudarte?</label>
                                        <textarea class="form-contacto" rows="5" name="ayudarte"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button onclick="realizaProceso()" class="btn btn-contacto">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="texto-seguiar text-uppercase">seguiar s.a.s de c.v</h2>
                        <ul class="info-contacto">
                            <li><strong>Calle 2da #1202 , Zona Centro, C.P. 31000</strong></li>
                            <li><strong>Chihuahua, Chih.</strong></li>
                            <li>ventas@seguiar.com</li>
                            <li><strong>T – +52-614-415-3525</strong> Ext. 106</li>
                            <li><strong>+52-614-486-6146</strong></li>
                            <li><i class="fab fa-facebook-f"></i> @SeguiarMx</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        function realizaProceso() {
            let parametros = {
                "nombre": $('[name="nombre"]').val(),
                "empresa": $('[name="empresa"]').val(),
                "tipo": $('[name="tipo"]').val(),
                "telefono": $('[name="telefono"]').val(),
                "email": $('[name="email"]').val(),
                "ciudad": $('[name="ciudad"]').val(),
                "estado": $('[name="estado"]').val(),
                "nosotros": $('[name="nosotros"]').val(),
                "ayudarte": $('[name="ayudarte"]').val()
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'contacto', //archivo que recibe la peticion
                type:  'post',
                dataType : "text",
                success:  function (data) {
                    toastr.info('Correo Enviado','Seguiar');
                    $('[name="nombre"]').val('');
                    $('[name="empresa"]').val('');
                    $('[name="tipo"]').val('');
                    $('[name="telefono"]').val('');
                    $('[name="email"]').val('');
                    $('[name="ciudad"]').val('');
                    $('[name="estado"]').val('');
                    $('[name="nosotros"]').val('');
                    $('[name="ayudarte"]').val('');
                },
                error: function (xhr, status, response) {
                    var error = jQuery.parseJSON(xhr.responseText);
                    for(let k in error.message){
                        toastr.error(error.message[k],'Seguiar');
                    }
                }
            });
        }

        function printErrorMsg (msg) {
            $.each( $.parseJSON(msg), function( key, value ) {
                toastr.error(value[0],'Seguiar');
            });
        }

    </script>
@endsection
