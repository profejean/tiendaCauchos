@extends ('layouts.admin')

@section ('content')

<div class="container-fluid">
	     <div class="col-12 text-center">
          <h3>CAUCHOS</h3>
        </div> 

        {!! Form::open(array('url'=>'cauchos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}
<div class="row"  style="background-color: #968F8F">
	<div class="col-lg-3 col-md-3 col-sm-12">
		
    <div class="accordion" id="accordionExample">
  <div class="card mt-2">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 style="color: #968F8F; text-align: center;">Marca</h5>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
                        <div class="col-md-6">

                    <select class="@error('marca') is-invalid @enderror" name="marca" id="" >
                            <option value="0">Elija una opcion</option>
                            @foreach($productos as $p)
                        <option value="{{$p->marca}}">{{$p->marca}}</option>
                        	@endforeach
                    </select>
                    
                            @error('marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h5 style="color: #968F8F; text-align: center;">Ancho</h5>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
                         <div class="col-md-6">

                    <select class="@error('ancho') is-invalid @enderror" name="ancho" id="">
                            <option value="0">Elija una opcion</option>
                            @foreach($productos as $p)
                        <option value="{{$p->ancho}}">{{$p->ancho}}</option>
                        	@endforeach
                    </select>
                    
                            @error('ancho')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h5 style="color: #968F8F; text-align: center;">Diámetro del Rin</h5>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                         <div class="col-md-6">

                    <select class="@error('diametro') is-invalid @enderror" name="diametro" id="">
                            <option value="0">Elija una opcion</option>
                            @foreach($productos as $p)
                        <option value="{{$p->diametro}}">{{$p->diametro}}</option>
                        	@endforeach
                    </select>
                    
                            @error('diametro')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h5 style="color: #968F8F; text-align: center;">Perfil</h5>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
                         <div class="col-md-6">

                    <select class="@error('perfil') is-invalid @enderror" name="perfil" id="">
                            <option value="0">Elija una opcion</option>
                            @foreach($productos as $p)
                        <option value="{{$p->perfil}}">{{$p->perfil}}</option>
                        	@endforeach
                    </select>
                    
                            @error('perfil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
      </div>
    </div>
  </div>

</div>

<div class="row" style="text-align: center; margin-top: 10px;">



	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="form-group">
			<button class="btn btn-danger" type="haiden"><h6>Buscar</h6></button>

		</div>

	</div>
        {{Form::close()}}
	</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12">
<div class="row mt-2">
@foreach($productos as $p)
	<div class="col-lg-4 col-md-4 col-sm-12">
<div class="card mb-2" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$p->nombre}}</h5>
  </div>
  <ul class="list-group">
    <li class="list-group-item" style="border-bottom: none;"></li>
    <li class="list-group-item" style="border-bottom: none;">Descripción del Producto: {{$p->descripcion}}</li>
    <li class="list-group-item" style="border-bottom: none;">Precio $: {{$p->precio_dolar}}</li>
    <li class="list-group-item" style="border-bottom: none;">Precio Bs: {{$p->precio_dolar}}</li>
    <li class="list-group-item">Inventario Disponible: {{$p->inventario}}</li>        
  </ul>
  <div class="card-body" style="text-align: center;">
    <button class="btn btn-danger">Agregar al carrito</button>
  </div>
</div>
</div>
@endforeach
</div>

</div>




</div>
@endsection