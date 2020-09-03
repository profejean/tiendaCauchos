@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">


  <div class="table-responsive-xl">
    <table class="table table-striped table-bordered table-condensed table-hover">

      <tr>
        <th colspan="5" style="text-align: center;">

          <h2 class="text-info">
            Tasa
          </h2>

  
          <span> 

            <a href="{{url('tasas/create')}}">

              <button class="btn btn-danger mr-5 float-right" data-toggle="tooltip" data-placement="top" title="Añadir Tasa">
                <h6 style="margin-top: 5px">Nueva</h6>
              </button>
            </a>

          </span>
       

        </th>
      </tr>     





      <tr class="text-center">


       <td>ID</td>
       <td>FECHA</td>
       <td>MONTO</td>
       



       <td>OPCIONES</td>

     </tr>


    
     @foreach ($tasas as $a)

     <tr class="text-center">

      <td>{{ $a->id   }}</td>
      <td>{{ $a->fecha }}</td>
      <td>{{ $a->monto }}</td>
      



      <td>

        <a href="{{URL::action('TasaController@edit',$a->id)}}" >
          <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Ver o Editar Tasa">
            <h6>Ver</h6>

          </button>

        </a>

      </td>

    </tr>


    @endforeach  

     <div class="row justify-content-center">
    {{ $tasas->render()}}  
  </div>

  </table>
</div>
<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection