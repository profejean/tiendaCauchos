@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">

  <div class="row justify-content-center">
    <img src="{{asset('img/carro.png')}}" alt="" style="width: 50px;">
    <h2 class="ml-2">
      Pedidos
    </h2>    
  </div>
  
{!! Form::model($orden_compras, ['method'=>'PATCH','route'=>['orden_compras.update',$orden_compras->id],'files'=>'true']) !!}

{{Form::token()}} 

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
    <h6 class="text-center" style="color: #FFFFFF;">MONEDA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">######</h6>
  </div> 

  <div class="col-lg-3 col-md-3 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>

      <div class="input-group mb-3">

        <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status">
          <option value="{{$orden_compras->status}}">{{$orden_compras->status}}</option>
          @if(($orden_compras->status) != 'Por Verificar Pago')
          <option value="Por Verificar Pago">Por Verificar Pago</option>
          @endif
          @if(($orden_compras->status) != 'Por Preparar')
          <option value="Por Preparar">Por Preparar</option>
          @endif
          @if(($orden_compras->status) != 'Por Entregar')
          <option value="Por Entregar">Por Entregar</option>
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


<div class="row text-center" style="background-color: #968F8F">
  
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



    <div class="row m-4">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>

</div>

 @push('scripts')
 
 @endpush
@endsection