@extends ('layouts.admin')

@section ('content')


<div class="container mt-5 mb-5">
            <div class="jumbotron jumbotron-fluid" style="margin-top: -70px;">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Carrito de compras') }}</h2>

            </div>
        </div>
<h4>Icono - Fin del Pedido</h4>
<div class="container" style="background-color: #968F8F; padding: 20px;">
        {!! Form::open(array('url'=>'recibo_pago', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center;">
            <img src="{{asset('img/box.png')}}" height="100px" width="100px;">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF; text-align: center;">Gracias por su compra</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF; text-align: center;">Nº de pedido: #####</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        </div> 

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">

        <div class="form-group" style="text-align: center;">

            <button class="btn btn-danger" type="submit">Volver a la tienda</button>

        </div>

    </div>

    {{ Form::close() }}
</div>
</div>                  
</div>
@push('scripts')



@endpush


@endsection
