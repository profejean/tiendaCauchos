@extends ('layouts.users')

@section ('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Inicio') }}</h2>

            </div>
        </div>

        {!! Form::model($general, ['method'=>'PATCH','route'=>['general.update',$general->id],'files'=>'true']) !!}

        {{Form::token()}}

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="logo" class="mr-2">{{ __('Logo') }}</label>
                        <img src="{{asset('img/'.$general->logo)}}" height="100" width="100">
                    </div>
                </div>  
            </div>
            <hr> 
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="logo" class="mr-2"> <h5>{{ __('Cargar Logo') }}</h5></label>
                <div class="input-group mb-3">


                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" id="logo" class="centerip" placeholder="" value="{{$general->logo}}">
                    @error('logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> 

        </div> 

    <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">   
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">                    
                            <label for="pregunta_twitter" class="mr-2">{{ __('¿Agregar Twitter?') }}</label>
                        </div>

                        <select class="custom-select @error('pregunta_twitter') is-invalid @enderror" name="pregunta_twitter" id="pregunta_twitter">
                <option value="{{$general->pregunta_twitter}}">{{$general->pregunta_twitter}}</option>
                            @if(($general->pregunta_twitter) != 'NO')
                            <option value="NO">NO</option>
                            @endif
                            @if(($general->pregunta_twitter) != 'SI')
                            <option value="SI">SI</option>
                            @endif

                        </select>

                        @error('pregunta_twitter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

<div class="container" style="display: none;" id="activar_twitter">
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="twitter" class="mr-2">{{ __('twitter') }}</label>
                        </div>
                            <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" placeholder="" />
                            @error('twitter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>                
</div>
                <div class="col-lg-3 col-md-3 col-sm-12">   
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">                    
                        <label for="pregunta_instagram" class="mr-2">{{ __('¿Agregar Instagram?') }}</label>
                    </div>

                    <select class="custom-select @error('pregunta_instagram') is-invalid @enderror" name="pregunta_instagram" id="pregunta_instagram">
            <option value="{{$general->pregunta_instagram}}">{{$general->pregunta_instagram}}</option>
            @if(($general->pregunta_instagram) != 'NO')
                        <option value="NO">NO</option>
                        @endif
                        @if(($general->pregunta_instagram) != 'SI')
                        <option value="SI">SI</option>
                        @endif

                    </select>

                    @error('pregunta_instagram')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

<div class="container" style="display: none;" id="activar_instagram">

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="instagram" class="mr-2">{{ __('Instagram') }}</label>
                        </div>
                            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="" />
                            @error('instagram')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
</div>
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_facebook" class="mr-2">{{ __('¿Agregar Facebook?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_facebook') is-invalid @enderror" name="pregunta_facebook" id="pregunta_facebook">
            <option value="{{$general->pregunta_facebook}}">{{$general->pregunta_facebook}}</option>
            @if(($general->pregunta_facebook) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_facebook) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_facebook')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>            

<div class="container" style="display: none;" id="activar_facebook">

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="facebook" class="mr-2">{{ __('Facebook') }}</label>
                        </div>
                            <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="facebook" placeholder="" />
                            @error('facebook')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
</div>
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_whatsapp" class="mr-2">{{ __('¿Agregar Whatsapp?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_whatsapp') is-invalid @enderror" name="pregunta_whatsapp" id="pregunta_whatsapp">
                <option value="{{$general->pregunta_whatsapp}}">{{$general->pregunta_whatsapp}}</option>
                @if(($general->pregunta_whatsapp) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_whatsapp) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_whatsapp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

<div class="container" style="display: none;" id="activar_whatsapp">

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="whatsapp" class="mr-2">{{ __('whatsapp') }}</label>
                        </div>
                            <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" placeholder="" />
                            @error('whatsapp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

    </div>
</div>
<div class="row">
    
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_contactanos" class="mr-2">{{ __('¿Agregar Contáctanos?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_contactanos') is-invalid @enderror" name="pregunta_contactanos" id="pregunta_contactanos">
        <option value="{{$general->pregunta_contactanos}}">{{$general->pregunta_contactanos}}</option>
                    @if(($general->pregunta_contactanos) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_contactanos) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_contactanos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

<div class="container" style="display: none;" id="activar_contactanos">

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="contactanos" class="mr-2">{{ __('Contáctanos') }}</label>
                        </div>
                            <input type="text" name="contactanos" class="form-control @error('contactanos') is-invalid @enderror" id="contactanos" placeholder="" />
                            @error('contactanos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>    

</div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label for="icono_carrito" class="mr-2">{{ __('Icono Carrito') }}</label>
                        <img src="{{asset('img/'.$general->icono_carrito)}}" height="100" width="100">
                    </div>
                </div>  
            </div>
            <hr> 
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="icono_carrito" class="mr-2"> <h5>{{ __('Cargar Icono') }}</h5></label>
                <div class="input-group mb-3">


                    <input type="file" name="icono_carrito" class="form-control @error('icono_carrito') is-invalid @enderror" id="icono_carrito" class="centerip" placeholder="" value="{{$general->icono_carrito}}">
                    @error('icono_carrito')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> 

        </div>

<div class="row">
    
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_pago_movil" class="mr-2">{{ __('¿Agregar Pago Móvil?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_pago_movil') is-invalid @enderror" name="pregunta_pago_movil" id="pregunta_pago_movil">
            <option value="{{$general->pregunta_pago_movil}}">{{$general->pregunta_pago_movil}}</option>
            @if(($general->pregunta_pago_movil) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_pago_movil) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_pago_movil')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
</div>

<div class="container" style="display: none;" id="activar_pago_movil">
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="tel_pago_movil" class="mr-2">{{ __('Teléfono') }}</label>
                        </div>
                            <input type="text" name="tel_pago_movil" class="form-control @error('tel_pago_movil') is-invalid @enderror" id="tel_pago_movil" placeholder="" />
                            @error('tel_pago_movil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>    

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="cedula_pago_movil" class="mr-2">{{ __('Cédula / Rif') }}</label>
                        </div>
                            <input type="text" name="cedula_pago_movil" class="form-control @error('cedula_pago_movil') is-invalid @enderror" id="cedula_pago_movil" placeholder="" />
                            @error('cedula_pago_movil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="banco_pago_movil" class="mr-2">{{ __('Banco') }}</label>
                        </div>
                            <input type="text" name="banco_pago_movil" class="form-control @error('banco_pago_movil') is-invalid @enderror" id="banco_pago_movil" placeholder="" />
                            @error('banco_pago_movil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>            
</div>
</div>
<div class="row">
    
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_transferencia" class="mr-2">{{ __('¿Agregar Transferencia?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_transferencia') is-invalid @enderror" name="pregunta_transferencia" id="pregunta_transferencia">
        <option value="{{$general->pregunta_transferencia}}">{{$general->pregunta_transferencia}}</option>
                    @if(($general->pregunta_transferencia) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_transferencia) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_transferencia')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
</div>
<div class="container" style="display: none;" id="activar_transferencia">
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="nro_cuenta_transferencia" class="mr-2">{{ __('Nº de Cuenta') }}</label>
                        </div>
                            <input type="text" name="nro_cuenta_transferencia" class="form-control @error('nro_cuenta_transferencia') is-invalid @enderror" id="nro_cuenta_transferencia" placeholder="" />
                            @error('nro_cuenta_transferencia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>    

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="nombre_transferencia" class="mr-2">{{ __('Nombre') }}</label>
                        </div>
                            <input type="text" name="nombre_transferencia" class="form-control @error('nombre_transferencia') is-invalid @enderror" id="nombre_transferencia" placeholder="" />
                            @error('nombre_transferencia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="ci_transferencia" class="mr-2">{{ __('Cédula / Rif') }}</label>
                        </div>
                            <input type="text" name="ci_transferencia" class="form-control @error('ci_transferencia') is-invalid @enderror" id="ci_transferencia" placeholder="" />
                            @error('ci_transferencia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="tipo_cuenta_transferencia" class="mr-2">{{ __('Tipo de Cuenta') }}</label>
                        </div>
                            <input type="text" name="tipo_cuenta_transferencia" class="form-control @error('tipo_cuenta_transferencia') is-invalid @enderror" id="tipo_cuenta_transferencia" placeholder="" />
                            @error('tipo_cuenta_transferencia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="banco_transferencia" class="mr-2">{{ __('banco_transferencia') }}</label>
                        </div>
                            <input type="text" name="banco_transferencia" class="form-control @error('banco_transferencia') is-invalid @enderror" id="banco_transferencia" placeholder="" />
                            @error('banco_transferencia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>            
</div>
</div>
<div class="row">
    
            <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_zelle" class="mr-2">{{ __('¿Agregar Zelle?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_zelle') is-invalid @enderror" name="pregunta_zelle" id="pregunta_zelle">
                    <option value="{{$general->pregunta_zelle}}">{{$general->pregunta_zelle}}</option>
                    @if(($general->pregunta_zelle) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_zelle) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_zelle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
</div>
<div class="container" style="display: none;" id="activar_zelle">
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="correo_zelle" class="mr-2">{{ __('Correo') }}</label>
                        </div>
                            <input type="email" name="correo_zelle" class="form-control @error('correo_zelle') is-invalid @enderror" id="correo_zelle" placeholder="" />
                            @error('correo_zelle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>    

            <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label for="nombre_zelle" class="mr-2">{{ __('Nombre') }}</label>
                        </div>
                            <input type="text" name="nombre_zelle" class="form-control @error('nombre_zelle') is-invalid @enderror" id="nombre_zelle" placeholder="" />
                            @error('nombre_zelle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>

</div>
</div>
<div class="row">
 
             <div class="col-lg-3 col-md-3 col-sm-12">   
                <div class="input-group mb-3">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_efectivo" class="mr-2">{{ __('¿Agregar Efectivo?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_efectivo') is-invalid @enderror" name="pregunta_efectivo" id="pregunta_efectivo">
            <option value="{{$general->pregunta_efectivo}}">{{$general->pregunta_efectivo}}</option>
                    @if(($general->pregunta_efectivo) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($general->pregunta_efectivo) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_efectivo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>   
           
</div>


<div class="row">

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

        <div class="form-group">

            <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

        </div>

    </div>

    {{ Form::close() }}

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

        <div class="form-group">

            <a class="btn btn-danger" href="{{url('home')}}" role="button">Regresar</a>

        </div>

    </div>
</div>



</div>
</div>

</div>

@push('scripts')


@endpush


@endsection
