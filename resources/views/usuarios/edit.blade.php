@extends ('layouts.users')

@section ('content')

    <div class="row justify-content-center mt-5">
      <h2 style="text-align: center;">
            Mi Cuenta
          </h2> 
    </div>



{!! Form::model($usuarios,['method'=>'PATCH','route'=>['usuarios.update',$usuarios->id],'files'=>'true']) !!}

     {{Form::token()}}
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="text-align: center;">
            <img src="{{asset('img/person.png')}}" height="100px" width="100px;">
                <h4  style="color: #FFFFFF;">Tus Datos:</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        @if(Auth::user()->rol == 'Gerente') 
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{$usuarios->email}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Correo:</h6>                
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Cedula-RIF" value="{{$usuarios->email}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Rol:</h6>                
                <div class="input-group mb-3">
                    <input type="rol" name="rol" class="form-control @error('rol') is-invalid @enderror" id="rol" placeholder="Rol" value="{{$usuarios->rol}}">
                    @error('rol')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Contraseña:</h6>                
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-contpassword @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" value="{{$usuarios->password}}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
        <div class="row text-center" style="background-color: #968F8F;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{URL::action('UsuarioController@cambio_pass',$usuarios->id)}}" role="button"><h6>Cambiar Contraseña</h6></a>

                </div>

            </div>
        </div>
    @else

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{Auth::user()->name}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Correo:</h6>                
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Cedula-RIF" value="{{Auth::user()->email}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>


        <div class="row text-center" style="background-color: #968F8F;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{URL::action('UsuarioController@cambio_pass',Auth::user()->id)}}" role="button"><h6>Cambiar Contraseña</h6></a>

                </div>

            </div>
        </div>

          @endif
                    <div class="row mt-3">



                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-5">

                            <div class="form-group">
                                <button class="btn btn-danger" type="submit" style="float: right;"><h5>Guardar</h5></button>

                            </div>

                        </div>



         {{Form::close()}}


      
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-5">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{url('home')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>
        </div> 
@push('scripts')



@endpush


@endsection
