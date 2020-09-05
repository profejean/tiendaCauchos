@extends ('layouts.users')

@section ('content')


  <div class="row mt-5">

 <div class="col-lg-6 col-md-6 col-sm-12 ml-5">
<div class="row justify-content-center">
  
    <img src="{{asset('img/riesgo.png')}}" alt="" style="width: 50px;">
    <h2 class="ml-2">
      Tasas
    </h2> 
</div>
</div>
<div class="row justify-content-center">
  
  <div class="col-lg-12 col-md-12 col-sm-12 ml-5">
    <a class="btn btn-danger" href="{{url('tasas/create')}}" role="button"><h6>Nuevo</h6></a>
     <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>
  </div> 
</div>

  </div>


@foreach($tasas as $a)

<div class="row text-center">

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->fecha_creacion}}</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">HORA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->hora}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">MONTO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{formato_numero($a->monto)}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2 mb-2"  href="{{URL::action('TasaController@edit',$a->id)}}" role="button"><h6>Ver Detalle</h6></a>
  </div>

</div>


  <hr style="border:10px; background: #FFF;">

    @endforeach  

  <div class="row justify-content-center">
    {{ $tasas->render()}}  
  </div>



<div class="row" style="text-align: center;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
      <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>
    </div>
  </div>
</div>



 @push('scripts')
 
 @endpush
@endsection