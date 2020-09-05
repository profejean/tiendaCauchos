@extends ('layouts.users')

@section ('content')



        <div class="row justify-content-center mt-5 mb-2">
          

          <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;">
          <h2 class="ml-2">
            Cauchos y Accesorios
          </h2>    
        </div>


  
@foreach($productos as $a)
<div class="row text-center">

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">CATEGORÍA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->categoria}}</h6>
  </div> 

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">PRODUCTO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->nombre}}</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">INVENTARIO DISPONIBLE</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->inventario}}</h6>
  </div> 

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2 mb-2"  href="{{URL::action('ProductoController@edit',$a->id)}}" role="button"><h6>Ver / Modificar</h6></a>
  </div>
  </div>


  <hr style="border:10px; background: #FFF;">

    @endforeach  

     <div class="row justify-content-center">
    {{ $productos->render()}}  
  </div>

<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6> Regresar</h6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection