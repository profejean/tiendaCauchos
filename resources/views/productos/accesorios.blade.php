@extends ('layouts.admin')

@section ('content')

<div class="container-fluid">
	     <div class="col-12 text-center">
          <h3>ACEESORIOS Y AUTOPARTES</h3>
        </div> 

        {!! Form::open(array('url'=>'accesorios', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

<div class="row"  style="background-color: #968F8F; margin-top: 10px">
	<div class="col-lg-3 col-md-3 col-sm-12 mt-2">
		
    <div class="input-group mb-3">
      <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
      @error('nombre')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
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


    @foreach($productos as $p)
	   <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
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
@endsection