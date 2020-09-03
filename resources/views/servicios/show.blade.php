@extends ('layouts.admin')

@section ('content')

<div class="container-fluid" style="margin-top: -45px;">
	     <div class="col-12 text-center">
          <h3>SERVICIOS</h3>
        </div> 

		<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: #968F8F;">
			<div class="row">
				@foreach($servicios as $p)
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="card mt-4 mb-4" style="width: 18rem;">
						  	<img src="..." class="card-img-top" alt="...">
						  		<div class="card-body">
						    		<h5 class="card-title">{{$p->nombre}}</h5>
						  		</div>
						  			<ul class="list-group">
						    		<li class="list-group-item" style="border-bottom: none;"></li>
						    		<li class="list-group-item" style="border-bottom: none; background-color: #d9534f; color: #FFFFFF">Descripción del Servicio: {{$p->descripcion}}</li>
									</ul>
						</div>
					</div>
				@endforeach
			</div>
		</div>
         <footer class="text-muted text-center text-small">
          <p class="mb-1">&copy; 2020 Publitenerifevip</p>
          <p>Todos los derechos reservados</p>

          </footer>
</div>


@endsection