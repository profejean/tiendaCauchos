@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">


  <div class="table-responsive-xl" style="margin-top: -90px;">
    <table class="table table-striped table-bordered table-condensed table-hover">


        <div class="row justify-content-center mb-2">
          

          <img src="{{asset('img/carro.png')}}" alt="" style="width: 50px;">
          <h2 class="ml-2">
            Pedidos
          </h2>    
        </div>


  
@foreach($orden_compras as $a)
<div class="row text-center">

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->id}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->fecha_creacion}}</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->status}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2"  href="{{URL::action('OrdenCompraController@edit',$a->id)}}" role="button"><h6>Ver Detalle</h6></a>
  </div>

</div>

  <hr style="border:10px; background: #FFF;">

    @endforeach  

     <div class="row justify-content-center">
    {{ $orden_compras->render()}}  
  </div>

  </table>
</div>
<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button">Regresar</a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection