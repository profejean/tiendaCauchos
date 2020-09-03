@extends ('layouts.users')

@section ('content')

<div class="container-fluid mt-5 mb-5">

 <div class="jumbotron jumbotron-fluid" style="background-color: #FFFFFF; margin-top: -150px">
  <div class="container" style="text-align: center;">
    <h2>{{ __('Mi cuenta') }}</h2>
  </div>
</div>
  
<div class="row" style="margin-top: -100px;">

  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="background-color: #968F8F; text-align: right;">
   <img src="{{asset('img/carrito.png')}}" class="card-img-top" style="max-width: 60px; max-height: 50px;">
 </div>
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="background-color: #968F8F;">
   <h2>Tus Pedidos</h2>
 </div>
</div>
<br>
  @foreach ($usuarios as $a)
<div class="row"  style="background-color: #968F8F; padding-bottom: 30px;">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF;">Número del Pedido</h6>
    <h6 style="color: #FFFFFF;">#####</h6>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF;">Fecha</h6>
    <h6 style="color: #FFFFFF;">DD/MM/AAAA</h6>
  </div>

    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF;">Status</h6>
    <h6 style="color: #FFFFFF;">#####</h6>
  </div>
  
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
      <a href="{{URL::action('UsuarioController@show',$a->id)}}">
        <button class="btn btn-danger"><h6>Ver Detalle</h6></button>
      </a>
  </div>
</div>
<br>
 @endforeach 

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{url('productos/create')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>

</div>

 @push('scripts')
 
 @endpush
@endsection