@extends ('layouts.admin')

@section ('content')


<div class="container mt-5 mb-5">
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Carrito de Compras') }}</h2>

            </div>
        </div>

        {!! Form::open(array('url'=>'recibo_pago', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}
<div class="container-fluid" style="background-color: #968F8F">
    
<div class="col-12 text-center">
  <h4 style="color: #FFFFFF">Primera Vez que Compro</h4>
</div> 

         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
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

                <div class="input-group mb-3">
                    <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" id="cedula_rif" placeholder="Cédula - RIF" />
                 @error('cedula_rif')
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

                        <textarea class="@error('direccion') is-invalid @enderror" type="text" name="direccion" rows="4" id="direccion" placeholder="Dirección" style="width: 95%;"></textarea>

                            @error('direccion')
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
                    <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Teléfono" />
                 @error('telefono')
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
                    <input type="text" name="contrasena" class="form-control @error('contrasena') is-invalid @enderror" id="contrasena" placeholder="Contraseña" />
                 @error('contrasena')
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
                    <input type="text" name="moneda" class="form-control @error('moneda') is-invalid @enderror" id="moneda" placeholder="Moneda" />
                 @error('moneda')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
<div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>
</div>                  
</div>
@push('scripts')



@endpush


@endsection
