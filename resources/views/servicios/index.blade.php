@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">


  <div class="table-responsive-xl">
    <table class="table table-striped table-bordered table-condensed table-hover">

      <tr>
        <th colspan="5" style="text-align: center;">

          <h2 class="text-info">
            Servicios
          </h2>

  
          <span> 

            <a href="{{url('servicios/create')}}">

              <button class="btn btn-info mr-5 float-right" data-toggle="tooltip" data-placement="top" title="Crear Servicio">
                <i class="fa fa-plus" aria-hidden="true" style="width: 15px;height: 24px;"></i>
              </button>
            </a>

          </span>
       

        </th>
      </tr>     





      <tr class="text-center">


       <td>ID</td>
       <td>NOMBRE</td>
       



       <td>OPCIONES</td>

     </tr>


    
     @foreach ($servicios as $a)

     <tr class="text-center">

      <td>{{ $a->id   }}</td>
      <td>{{ $a->nombre }}</td>
      



      <td>

        <a href="{{URL::action('ServicioController@edit',$a->id)}}" >
          <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Editar Servicio">
            <i class="fa fa-pencil text-white" style="width: 20px;height: 24px;"></i>

          </button>


        </a>

        <a href="" data-target="#modal-delete-{{$a->id}}" data-toggle="modal" data-backdrop="false">
          <button class="btn bg-danger mr-5" data-toggle="tooltip" data-placement="top" title="Eliminar Servicio">
            <i class="fas fa-trash text-white"></i>
          </button>
        </a>
      </td>

    </tr>

    @include('servicios.modal')


    @endforeach  

     <div class="row justify-content-center">
    {{ $servicios->render()}}  
  </div>

  </table>
</div>


</div>

 @push('scripts')
 
 @endpush
@endsection