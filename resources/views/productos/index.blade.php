@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">


  <div class="table-responsive-xl">
    <table class="table table-striped table-bordered table-condensed table-hover">

      <tr>
        <th colspan="5" style="text-align: center;">

          <h2 class="text-info">
            Cauchos y Accesorios
          </h2>

  
          <span> 

            <a href="{{url('productos/create')}}">

              <button class="btn btn-info mr-5 float-right" data-toggle="tooltip" data-placement="top" title="Crear Producto">
                <i class="fa fa-plus" aria-hidden="true" style="width: 15px;height: 24px;"></i>
              </button>
            </a>

          </span>
       

        </th>
      </tr>     





      <tr class="text-center">


       <td>ID</td>
       <td>NOMBRE</td>
       <td>INVENTARIO DISPONIBLE</td>
       



       <td>OPCIONES</td>

     </tr>


    
     @foreach ($productos as $a)

     <tr class="text-center">

      <td>{{ $a->id   }}</td>
      <td>{{ $a->nombre }}</td>
      <td>{{ $a->inventario }}</td>
      



      <td>

        <a href="{{URL::action('ProductoController@edit',$a->id)}}" >
          <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Editar Servicio">
            <i class="fa fa-pencil text-white" style="width: 20px;height: 24px;"></i>

          </button>


        </a>

        <a href="" data-target="#modal-delete-{{$a->id}}" data-toggle="modal" data-backdrop="false">
          <button class="btn bg-danger mr-5" data-toggle="tooltip" data-placement="top" title="Eliminar Producto">
            <i class="fas fa-trash text-white"></i>
          </button>
        </a>
      </td>

    </tr>

    @include('productos.modal')


    @endforeach  

     <div class="row justify-content-center">
    {{ $productos->render()}}  
  </div>

  </table>
</div>


</div>

 @push('scripts')
 
 @endpush
@endsection