@extends ('layouts.users')

@section ('content')

@push('css')
@include('css.input_number_control')
@endpush


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2 font-weight-bold">
    Carrito de Compras
  </h2>    
</div> 


<div class="row ml-2">
  <img src="{{asset('img/10.png')}}" alt="" style="width: 50px;">
  <h2 class="ml-2">
    Pedido
  </h2>    
</div>
<input type="hidden" value="{{count(Cart::content())}}" id="cantidad_producto">


<?php
    $cont = 0;
    ?>

@foreach(Cart::content() as $c)
<div class="row"  style="background-color: #968F8F; padding-bottom: 30px;">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <img src="{{asset('img/'.$c->options->img)}}" class="card-img-top" alt="..." height="75" width="150">
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
<<<<<<< HEAD
    <h6 style="color: #FFFFFF">{{$c->name}}</h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
    {!! Form::open(array('url'=>'actualizar_carrito', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true', 'id'=>'actualizar_'.$cont)) !!}

          {{Form::token()}} 

            <div class="input-group justify-content-center mb-2"> 
              <div class="input-group-append">
                <span class="input-group-text" id="disminuir_{{$cont}}" data="{{$cont}}">                   
                  <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
                </span>
              </div>

              <input type="number" class="text-center" name="cantidad" id="cantidad_{{$cont}}"  value="{{$c->qty}}" style="width: 60px;" data="{{$cont}}">
              <input type="hidden" id="pc_producto_id" name="producto_id"  value="{{$c->id}}"> 
              <input type="hidden" id="inventario_{{$cont}}" value="$c->options->inventario"> 

              <div class="input-group-prepend">
                <span class="input-group-text" id="incrementar_{{$cont}}" data="{{$cont}}">                  
                  <i class="fas fa-plus" style="color: #4169E1;"></i>                
                </span>
              </div>

              

              <input type="hidden" name="rowId" value="{{$c->rowId}}">

              <div class="input-group-append">
                <span class="input-group-text">                   
                  <button id="enviar_{{$cont}}" data="{{$cont}}" class="btn btn-outline-danger">Actualizar</button>
                </span>
              </div>

            </div>

        {{Form::close()}}
=======
    <h6 style="color: #FFFFFF">Nombre del Producto</h6>
    <h6 style="color: #FFFFFF"> ###### </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-5">
    <button style="background-color: #d9534f; width: 40px;"><h5 style="color: #FFFFFF">-</h5></button> X 
    <button style="background-color: #d9534f; width: 40px;" ><h5 style="color: #FFFFFF">+</h5></button>
>>>>>>> 570f55fe903d7638758face62972d2fce0200709
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF">Precio $</h6>
    <h6 style="color: #FFFFFF">{{$c->price}}</h6>
  </div>

<<<<<<< HEAD

=======
>>>>>>> 570f55fe903d7638758face62972d2fce0200709
  
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">

    <a href="{{URL::action('CarritoController@remover',$c->rowId)}}" class="ml-2" title="Remover">
          <button class="btn ml-5"><i class="fas fa-trash-alt text-white"></i></button>
    </a>

  </div>
</div>

 <?php
    $cont = $cont + 1;
    ?>

    @endforeach



<<<<<<< HEAD
<div class="row mb-5" style="text-align: center; margin-top: 10px;">
=======
          <div class="form-group">
                  <a href="{{url('pregunta')}}" class="btn btn-danger" style="width: 10%;"><h6 style="color: #FFFFFF">Confirmar</h6></a>
>>>>>>> 570f55fe903d7638758face62972d2fce0200709

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="form-group">
      <a href="{{url('pregunta')}}" class="btn btn-danger" style="width: 10%;"><h6 style="color: #FFFFFF">Ir a pagar</h6></a>

    </div>

  </div>
</div>



@push('scripts')
@include('js.add_carrito')
@include('js.incrementar_cantidad')
@endpush
@endsection