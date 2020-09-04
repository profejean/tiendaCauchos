@extends ('layouts.users')

@section ('content')


<div class="container mt-5">

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
        Fin del Pedido
    </h2>    
</div>
</div>


<div class="container-fluid" style="background-color: #968F8F; padding: 20px;">

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

            <a href="{{url('productos')}}" class="btn btn-danger" style="width: 30%;"><h6>Volver a la tienda</h6></a>

        </div>

    </div>

    {{ Form::close() }}
</div>
</div>                  
</div>
@push('scripts')



@endpush


@endsection
