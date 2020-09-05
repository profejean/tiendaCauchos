@extends ('layouts.users')

@section ('content')

        <div class="jumbotron jumbotron-fluid">
            <div class="container" style="text-align: center;">
                <h2>{{ __('Cauchos y Accesorios') }}</h2>
            </div>
        </div>

<div class="container-fluid" style="background-color: #968F8F">

{!! Form::model($productos, ['method'=>'PATCH','route'=>['productos.update',$productos->id],'files'=>'true']) !!}

{{Form::token()}} 

        @if(($productos->categoria) == 'accesorios')

        <div class="col-12 text-center">
          <h4 style="color: #FFF">Accesorio o Repuestos</h4>
        </div> 

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6>Nombre del Producto</h6>
                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$productos->nombre}}">
                 @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="form-group row" style="margin-left: 5px;">

                        <textarea class="@error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;">value="{{$productos->descripcion}}"</textarea>

                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>

        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                    <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" value="{{$productos->precio_dolar}}">
                 @error('precio_dolar')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" value="{{$productos->inventario}}">
                 @error('inventario')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">

                    <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1" value="{{$productos->imagen_1}}">
                        @error('imagen_1')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

    <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">

                    <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2" value="{{$productos->imagen_2}}">
                        @error('imagen_2')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                    <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria" value="{{$productos->categoria}}" readonly>
                 @error('categoria')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

@elseif (($productos->categoria) == 'cauchos') 

<div class="col-12 text-center">
  <h4 style="color: #FFF">Cauchos</h4>
</div> 

         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$productos->nombre}}">
                 @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Categoría:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria" value="{{$productos->categoria}}" readonly>
                 @error('categoria')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>                                
        </div>

        <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <h6 style="color: #FFF;">Descripción:</h6>
                    <div class="form-group row" style="margin-left: 110px;">
                        <textarea class="@error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;">value="{{$productos->descripcion}}"</textarea>

                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Precio $:</h6>
                <div class="input-group mb-3">

                    <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" value="{{$productos->precio_dolar}}">
                 @error('precio_dolar')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Marca:</h6>                
                    <div class="input-group mb-3">

                            <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" id="marca" placeholder="Marca" value="{{$productos->marca}}">
                            @error('marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Ancho:</h6>
                <div class="input-group mb-3">

                    <input type="text" name="ancho" class="form-control @error('ancho') is-invalid @enderror" id="ancho" placeholder="Ancho" value="{{$productos->ancho}}">
                        @error('ancho')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                       <h6 style="color: #FFF;">Cantidad Disponible:</h6>     
                <div class="input-group mb-3">
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" value="{{$productos->inventario}}">
                 @error('inventario')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                            <h6 style="color: #FFF;">Diámetro:</h6>
                <div class="input-group mb-3">

                    <input type="text" name="diametro" class="form-control @error('diametro') is-invalid @enderror" id="diametro" placeholder="Diámetro del Rin" value="{{$productos->diametro}}">
                        @error('diametro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                            <h6 style="color: #FFF;">Perfil:</h6>
                <div class="input-group mb-3">

                    <input type="text" name="perfil" class="form-control @error('perfil') is-invalid @enderror" id="perfil" placeholder="Perfil" value="{{$productos->perfil}}">
                        @error('perfil')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h6 style="color: #FFF;">Imagen 1:</h6>
                <div class="input-group mb-3">

                    <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1" value="{{$productos->imagen_1}}">
                        @error('imagen_1')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h6 style="color: #FFF;">Imagen 2:</h6>
                <div class="input-group mb-3">

                    <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2" value="{{$productos->imagen_2}}">
                        @error('imagen_2')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>                  

        <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                                        <h6 style="color: #FFF;">Imagen 3:</h6>
                <div class="input-group mb-3">

                    <input type="file" name="imagen_3" class="form-control @error('imagen_3') is-invalid @enderror" id="imagen_3" placeholder="Cargar Imagen 3" value="{{$productos->imagen_3}}">
                        @error('imagen_3')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
@endif

</div>
<br>

                    <div class="row">



                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="form-group">
                                <button class="btn btn-danger" type="submit" style="float: right;"><h5>Guardar</h5></button>

                            </div>

                        </div>



         {{Form::close()}}


      
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{url('productos')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>
        </div> 
@push('scripts')



@endpush


@endsection
