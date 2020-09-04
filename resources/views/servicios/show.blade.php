@extends ('layouts.users')

@section ('content')


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2">
    Servicios
</h2>    
</div>       
  
<div class="container-fluid" style="background-color: #968F8F">

	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="190" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>
					<h6 class="text-center" style="color: #FFFFFF;">{{$servicios->descripcion}}</h6>	
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="190" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>
					<h6 class="text-center" style="color: #FFFFFF;">{{$servicios->descripcion}}</h6>	
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="190" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>
					<h6 class="text-center" style="color: #FFFFFF;">{{$servicios->descripcion}}</h6>	
				</div>
			</div>
		</div>

	</div>

</div>    

    <div class="row text-center mt-4">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>



 @push('scripts')
 
 @endpush
@endsection