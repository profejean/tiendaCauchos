@extends ('layouts.admin')

@section ('content')


            <div class="jumbotron jumbotron-fluid" style="margin-top: -40px;">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Carrito de Compras') }}</h2>

              </div>
        </div>
<h4>Icono - Recibo de Pago</h4>
<div class="container" style="background-color: #968F8F">

        {!! Form::open(array('url'=>'orden_compras/create', 'method'=>'GET', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;">

            <div class="form-group" style="text-align: center;">
                <input type="hidden" name="recibo" value="cauchos">
                <button type="submit" class="btn btn-danger">
                    <h5>Primera Vez que Compro</h5>
                </button>
            </div>

        </div>
         {{Form::close()}}

        {!! Form::open(array('url'=>'orden_compras.create', 'method'=>'GET', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 20px;">

            <div class="form-group" style="text-align: center;">
                <input type="hidden" name="recibo" value="accesorios">
                <button type="submit" class="btn btn-danger">
                    <h5>Ya he Comprado</h5>
                </button>

            </div>

        </div>

         {{Form::close()}}       
  

</div>
        <div class="row mt-5">
      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group" style="text-align: center;">

                    <a class="btn btn-danger" href="{{url('productos')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>
        </div>                


@push('scripts')



@endpush


@endsection
