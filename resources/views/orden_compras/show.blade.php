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
  
@foreach($orden_compras as $a)

<div class="row text-center" style="background-color: #d9534f">

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> ###### </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div>

</div>

<div class="row" style="background-color: #968F8F">
	
  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nombre del Producto</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> ###### </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Cantidad</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Precio BsS:</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div>
	
</div>

<div class="row" style="background-color: #968F8F;"><br></div>	


<div class="row"style="background-color: #968F8F;">

	<div class="col-lg-6 col-md-6 col-sm-12"></div>

	<div class="col-lg-6 col-md-6 col-sm-12">
		<div class="row">	
			  <div class="col-lg-3 col-md-3 col-sm-12">
			    <h6 style="color: #FFFFFF;">Sub Total:</h6>

			    <h6 style="color: #FFFFFF;">BsS IVA:</h6>

			    <h6 style="color: #FFFFFF;">Flete:</h6>

			    <h6 style="color: #FFFFFF;">TOTAL:</h6>
			             
			  </div>


			  <div class="col-lg-3 col-md-3 col-sm-12">

			    <h6 style="color: #FFFFFF;"> ###### </h6>

			    <h6 style="color: #FFFFFF;"> ###### </h6>

			    <h6 style="color: #FFFFFF;"> ###### </h6>

			    <h6 style="color: #FFFFFF;"> ###### </h6>             
			  </div>

			  <div class="col-lg-3 col-md-3 col-sm-12 mb-3">  	

			  	<img src="{{asset('img/filtro.jpg')}}" alt="" style="max-width: 150px; max-height: 150px;">    
			  </div>

		</div>
	</div>
</div> 



    @endforeach  


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