@extends ('layouts.users')

@section ('content')


            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Cauchos y Accesorios') }}</h2>

              </div>
        </div>
<div class="container" style="background-color: #968F8F">

<br>    

        {!! Form::open(array('url'=>'tipo', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">

            <div class="form-group" style="text-align: center;">
                <input type="hidden" name="tipo" value="Cauchos">
                <button type="submit" class="btn btn-danger">
                    <h5>Caucho</h5>
                </button>
            </div>

        </div>
         {{Form::close()}}

        {!! Form::open(array('url'=>'tipo', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group" style="text-align: center;">
                <input type="hidden" name="tipo" value="Accesorios">
                <button type="submit" class="btn btn-danger">
                    <h5>Accesorio o Repuesto</h5>
                </button>

            </div>

        </div>

         {{Form::close()}}
<br><br><br>        
  

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
