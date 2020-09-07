@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

  <div class="row justify-content-center mt-5">
    <img src="{{asset('img/pedidos.png')}}" alt="" style="width: 50px;">
    <h2 class="ml-2">
      Pedidos
    </h2>    
  </div>
  
{!! Form::model($orden_compras, ['method'=>'PATCH','route'=>['orden_compras.update',$orden_compras->id],'files'=>'true']) !!}

{{Form::token()}} 

<div class="row text-center" style="background-color: #d9534f">

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->id}} </h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$orden_compras->fecha_creacion}}</h6>
  </div>  

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>

      <div class="input-group mb-3">

        <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
          <option value="{{$orden_compras->status}}">{{$orden_compras->status}}</option>
          @if(($orden_compras->status) != 'Solicitado')
          <option value="Solicitado">Solicitado</option>
          @endif
          @if(($orden_compras->status) != 'Entregado')
          <option value="Entregado">Entregado</option>
          @endif
          @if(($orden_compras->status) != 'Anulado')
          <option value="Anulado">Anulado</option>
          @endif    
          </select>

          @error('status')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
    </div>
</div>

@foreach($detalle_compras as $b)

<div class="row text-center" style="background-color: #968F8F">
  
  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nombre del Producto</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{buscar_nombre_producto($b->producto_id)}} </h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Cantidad</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$b->cantidad}} </h6>
  </div>  

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Precio $:</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{formato_numero($b->precio_dolar)}} </h6>
  </div>
  
</div>

<hr style="background-color: #FFF;"> 

@endforeach

<div class="row justify-content-center"style="background-color: #968F8F;">

        <div class="col-lg-4 col-md-4 col-sm-12 mt-12">
          <h6 class="text-center" style="color: #FFFFFF;">Nombre:</h6>
          <h6 class="text-center" style="color: #FFFFFF;">CI:</h6>
          <h6 class="text-center" style="color: #FFFFFF;">Forma de Pago:</h6>
          <h6 class="text-center" style="color: #FFFFFF;">Teléfono:</h6>
          <h6 class="text-center" style="color: #FFFFFF;">Dirección:</h6>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mt-12">
          <h6 class="text-left" style="color: #FFFFFF;"> {{$orden_compras->nombre}} </h6>          
          <h6 class="text-left" style="color: #FFFFFF;"> {{$orden_compras->ci}} </h6> 
          <h6 class="text-left" style="color: #FFFFFF;"> {{$orden_compras->forma_pago}} </h6>                    
          <h6 class="text-left" style="color: #FFFFFF;"> {{$orden_compras->tlf}} </h6> 
          <p class="text-left" style="color: #FFFFFF;"> {{$orden_compras->direccion}} </p> 
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mt-12 text-center">
          <h4 style="color: #FFFFFF;">TOTAL $:</h4>         
          <h4 style="color: #FFFFFF;"> {{formato_numero($orden_compras->total)}} </h4>             
        </div>



</div> 



    <div class="row m-4">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;"><h6>Guardar</h6></button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('orden_compras')}}" role="button"><h6>Regresar</h6></a>

            </div>

        </div>
    </div>



 @push('scripts')
 
 @endpush
@endsection