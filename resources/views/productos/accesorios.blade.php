@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

	     <div class="col-12 text-center mt-5">
          <h3 class="font-weight-bold">Accesorios y Autopartes</h3>
        </div> 

        {!! Form::open(array('url'=>'accesorios', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

<div class="row"  style="background-color: #968F8F; margin-top: 10px">
	<div class="col-lg-3 col-md-3 col-sm-12 mt-1">
		
    <div class="input-group mt-2 mb-3">
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

  <div class="col-lg-9 col-md-9 col-sm-12 mt-1">
    <div class="row">
      
    @foreach($productos as $p)
	   <div class="col-lg-4 col-md-4 col-sm-12 mt-2 mb-2">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('img/filtro.jpg')}}" alt="" style="max-width: 300px; max-height: 170px;">
            <div class="card-body">
              <h5 class="card-title">{{$p->nombre}}</h5>
            </div>
            <ul class="list-group">
              <li class="list-group-item" style="border-bottom: none;"></li>
              <li class="list-group-item" style="border-bottom: none;">Descripción del Producto: <a href="#"></a></li>
              <li class="list-group-item" style="border-bottom: none;">Precio $: {{formato_numero($p->precio_dolar)}}</li>
              <li class="list-group-item" style="border-bottom: none;">Precio BsS: {{formato_numero($p->precio_dolar)}}</li>
              <li class="list-group-item">Inventario Disponible: {{$p->inventario}}</li>        
            </ul>
          <div class="card-body" style="text-align: center;">
            <button class="btn btn-danger">Agregar al carrito</button>
          </div>
        </div>
    </div>
    @endforeach
    </div>
    <div class="row" style="margin-bottom: 50px;"><br></div>
</div>
</div>

  










@endsection