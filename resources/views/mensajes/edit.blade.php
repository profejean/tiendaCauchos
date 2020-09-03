@extends ('layouts.admin')

@section ('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
  
            <div class="jumbotron jumbotron-fluid" style="width: 50%;">
              
                    <h2 class="text-center">{{ __('Mensajes') }}</h2>

             
            </div>
  
    </div>

      {!! Form::model($mensajes, ['method'=>'PATCH','route'=>['mensajes.update',$mensajes->id],'files'=>'true']) !!}

        {{Form::token()}}


     <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

               <h4>{{$mensajes->asunto}}</h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

                <p style="text-align: justify;">{{$mensajes->mensaje}}</p>
            </div>
        </div>
    </div> 



    <div class="row justify-content-center mb-5">

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('mensajes')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>





</div>

@push('scripts')

@endpush


@endsection
