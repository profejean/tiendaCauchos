@extends ('layouts.users')

@section ('content')


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2 font-weight-bold">
    Servicios
</h2>    
</div>       
  
<div class="row" style="background-color: #968F8F;">

		<div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="background-color: #968F8F">	
	<div class="card" style="width: 100%">
		<img src="{{asset('img/filtro.jpg')}}" alt="" style="width: 100%; max-height: 170px;">
		<div class="card-body" style="background-color: #d9534f;">
			<h5 class="card-title" style="color: #FFFFFF;">Nombre del Servicio 1</h5>
			<p class="card-text" style="color: #FFFFFF;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
	</div>
</div>
		<div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="background-color: #968F8F">
	<div class="card" style="width: 100%">
		<img src="{{asset('img/filtro.jpg')}}" alt="" style="width: 100%; max-height: 170px;">
		<div class="card-body" style="background-color: #d9534f;">
			<h5 class="card-title" style="color: #FFFFFF;">Nombre del Servicio 2</h5>
			<p class="card-text" style="color: #FFFFFF;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
	</div>
</div>
		<div class="col-lg-4 col-md-4 col-sm-12 mt-3 mb-5" style="background-color: #968F8F;">
	<div class="card" style="width: 100%">
		<img src="{{asset('img/filtro.jpg')}}" alt="" style="width: 100%; max-height: 170px;">
		<div class="card-body" style="background-color: #d9534f;">
			<h5 class="card-title" style="color: #FFFFFF;">Nombre del Servico 3</h5>
			<p class="card-text" style="color: #FFFFFF;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
	</div>
		</div>	
</div>
   



 @push('scripts')
 
 @endpush
@endsection