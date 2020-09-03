@extends ('layouts.admin')

@section ('content')

<div class="container-fluid mt-5 mb-5">
          <h2 style="text-align: center;">
            Mi Cuenta
          </h2> 

  <div class="table-responsive-xl">
    <table class="table table-striped table-bordered table-condensed table-hover">

      <tr>
        <th colspan="5" style="text-align: center;">

          <h2 class="text-info">
            Mensajes
          </h2>    

        </th>
      </tr>     





      <tr class="text-center">


       <td>ID</td>
       <td>USUARIO</td>
       <td>ASUNTO</td>
       <td>STATUS</td>
       



       <td>OPCIONES</td>

     </tr>


    
     @foreach ($mensajes as $a)

     <tr class="text-center">

      <td>{{ $a->id   }}</td>
      <td>{{ $a->usuario_id }}</td>
      <td>{{ $a->asunto }}</td>
      <td>{{ $a->status }}</td>
      



      <td>

      <a href="{{URL::action('MensajeController@show',$a->id)}}">
        <button class="btn btn-danger">Ver Detalle</button>
      </a>

      </td>

    </tr>


    @endforeach  

     <div class="row justify-content-center">
    {{ $mensajes->render()}}  
  </div>

  </table>
</div>
<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button">Regresar</a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection