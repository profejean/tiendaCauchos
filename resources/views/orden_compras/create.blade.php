@extends ('layouts.users')

@section ('content')


<div class="container" style="margin-top: -50px;">

        <div class="row justify-content-center mb-2">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                
          <h2 class="font-weight-bold">
            Carrito de Compras
          </h2>    
            </div>
        </div>

    <div class="row mb-2">


      <img src="{{asset('img/velocidad.png')}}" alt="" style="width: 50px;">
      <h2 class="ml-2">
        Recibo de Pago
    </h2>    
</div>
</div>

        {!! Form::open(array('url'=>'orden_compras', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

<div class="container-fluid" style="background-color: #968F8F">

    <div class="row justify-content-center">
        <h6 class="mt-3" style="color: #FFF;">Sub Total $: </h6> <h4 class="mt-3" style="color: #FFF;">######</h4>
    </div>

    <div class="row justify-content-center">
        <h6 style="color: #FFF;">BsS. IVA: </h6> <h4 style="color: #FFF;">######</h4>        
    </div>

    <div class="row justify-content-center">
        <h6 style="color: #FFF;">Flete BsS: </h6> <h4 style="color: #FFF;">######</h4>        
    </div>

    <div class="row justify-content-center">
        <h6 style="color: #FFF;">TOTAL $: </h6> <h4 style="color: #FFF;">######</h4>        
    </div>

    <div class="row justify-content-center">
        <p style="color: #FFF;">"NOTA: El despacho en la zona de Caracas tiene un costo de 5$, para otras zonas debe consultar el precio" </p>      
    </div>

    <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 justify-content-center">
        <div class="custom-file">
            <input type="file" class="custom-file-input archivo" name="img" id="img" required style="width: 10%;">
            <label class="custom-file-label" for="img" data-browse="Cargar" style="width: 90%;">Adjuntar Pago</label>
        </div>
        </div>        
    </div>        
</div>

        <div class="row mt-5">
      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group" style="text-align: center;">

                    <a class="btn btn-danger" href="{{url('fin_pedido')}}" role="button"><h5>Pagar</h5></a>

                </div>

            </div>
        </div>                

        {{Form::token()}}
@push('scripts')



@endpush


@endsection
