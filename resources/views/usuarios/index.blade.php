@extends ('layouts.users')

@section ('content')


    <div class="row justify-content-center mt-5">
      <h2 style="text-align: center;">
            Mi Cuenta
          </h2> 
    </div>
<hr>
  
<div class="row" >

  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="text-align: right;">
   <img src="{{asset('img/usuarios.png')}}" class="card-img-top" style="height: 90px;width: 90px;">
 </div>
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
   <h2>Usuarios
   <span style="float: right;"><a href="{{url('usuarios/create')}}" class="btn btn-danger"><h6>Crear usuario</h6></a></span>
   </h2>
 </div>
</div>
<br>
  @foreach ($usuarios as $a)
<div class="row"  style="background-color: #968F8F;">
 

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nombre</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->name}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <h6 class="text-center" style="color: #FFFFFF;">Email</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->email}}</h6>
  </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <h6 class="text-center" style="color: #FFFFFF;">Rol</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->rol}}</h6>
  </div>
  
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <a href="{{URL::action('UsuarioController@edit',$a->id)}}">
        <button class="btn btn-danger"><h6>Ver Detalle</h6></button>
      </a>
  </div>
</div>
<br>
 @endforeach 

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5" style="text-align: center;">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{url('home')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>


 @push('scripts')
 
 @endpush
@endsection