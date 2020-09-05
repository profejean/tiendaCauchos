@extends ('layouts.users')

@section ('content')


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
  

<div class="row"  style="background-color: #968F8F; padding-bottom: 30px;">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <img src="..." class="card-img-top" alt="...">
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF">Nombre del Producto</h6>
    <h6 style="color: #FFFFFF"> ###### </h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-5">
    <button style="background-color: #d9534f; width: 40px;"><h5 style="color: #FFFFFF">-</h5></button> X 
    <button style="background-color: #d9534f; width: 40px;" ><h5 style="color: #FFFFFF">+</h5></button>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF">Precio $</h6>
    <h6 style="color: #FFFFFF">#####</h6>
  </div>

  
  <div class="mt-5">
    
          <a href="" data-target="#modal-delete-" data-toggle="modal" data-backdrop="false">
          <button class="btn bg-danger mr-5" data-toggle="tooltip" data-placement="top" title="Eliminar Producto">
            <i class="fas fa-trash text-white"></i>
          </button>
        </a>

</div>
  </div>

 

<div class="row" style="text-align: center; margin-top: 10px;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="form-group">
                  <a href="{{url('pregunta')}}" class="btn btn-danger" style="width: 10%;"><h6 style="color: #FFFFFF">Confirmar</h6></a>

          </div>

        </div>
</div>



 @push('scripts')
 
 @endpush
@endsection