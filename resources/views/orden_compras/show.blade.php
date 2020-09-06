@extends ('layouts.users')

@section ('content')

<div class="container-fluid mt-5 mb-5">

	<div class="row justify-content-center mb-2">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">

			<h2 class="font-weight-bold">
				Mi Cuenta
			</h2>    
		</div>
	</div>

	<div class="row justify-content-center" style="background-color: #968F8F">
		<img src="{{asset('img/carro.png')}}" alt="" style="width: 50px;">
		<h2 class="ml-2" style="color: #FFF">
			Tus Pedidos
		</h2>    
	</div>
  


<div class="row text-center" style="background-color: #d9534f">

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->nro_pedido}} </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->fecha}} </h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">MÉTODO DE PAGO</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->metodo_pago}} </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->status}} </h6>
  </div>

</div>


@foreach($detalle_compras as $b)

<div class="row" style="background-color: #968F8F">
	
  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nombre del Producto</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{buscar_nombre_producto($b->producto_id)}} </h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Cantidad</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$b->cantidad}} </h6>
  </div>  

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Precio $:</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{formato_numero($b->precio_total_dolares)}} </h6>
  </div>

</div>
<hr style="background-color: #FFF;">
    @endforeach  

<div class="row" style="background-color: #968F8F;"><br></div>	


<div class="row"style="background-color: #968F8F;">

	<div class="col-lg-6 col-md-6 col-sm-12"></div>

	<div class="col-lg-6 col-md-6 col-sm-12">

		<div class="row">	
			  <div class="col-lg-3 col-md-3 col-sm-12">

			    <h4 style="color: #FFFFFF; margin-top: 40px;">TOTAL $:</h4>
			             
			  </div>

			  <div class="col-lg-3 col-md-3 col-sm-12">

			    <h4 style="color: #FFFFFF; margin-top: 40px;"> {{formato_numero($orden_compras->precio_total_dolares)}} </h4>             
			  </div>

			  <div class="col-lg-3 col-md-3 col-sm-12 mb-3">  	

			  	<img src="{{asset('img/filtro.jpg')}}" alt="" style="max-width: 150px; max-height: 150px;">    
			  </div>

		</div>
	</div>
</div> 

<div class="row"><br></div>




<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('orden_compras')}}" role="button"><H6>Regresar</H6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection