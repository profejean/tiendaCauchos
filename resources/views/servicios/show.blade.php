@extends ('layouts.users')

@section ('content')


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2 font-weight-bold">
    Servicios
</h2>    
</div>       
  


	<div class="row" style="background-color: #968F8F">
		<div class="col-lg-4 col-md-4 col-sm-12 mt-3">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="230" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>	
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="background-color: #968F8F">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="230" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>	
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="background-color: #968F8F">
			<div class="input-group mb-3 justify-content-center">
				<img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="230" height="190">
				<div style="background-color: #d9534f; max-width: 65%;">
					<h4 class="text-center" style="color: #FFFFFF;">{{$servicios->nombre}}</h4>	
				</div>
			</div>
		</div>

	</div>
   



 @push('scripts')
 
 @endpush
@endsection