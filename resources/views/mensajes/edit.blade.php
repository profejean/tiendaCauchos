@extends ('layouts.admin')

@section ('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Servicios') }}</h2>

            </div>
        </div>

        {!! Form::model($servicios, ['method'=>'PATCH','route'=>['servicios.update',$servicios->id],'files'=>'true']) !!}

        {{Form::token()}}

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="input-group mb-3">

                   <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Servicio" value="{{$servicios->nombre}}">
                   @error('nombre')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>  
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row" style="margin-left: 70px;">

                <textarea class="@error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" class="centerta" placeholder="Descripción" style="width: 80%;">{{$servicios->descripcion}}</textarea>

                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div> 

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="imagen" class="mr-2">{{ __('Imagen') }}</label>
                    <img src="{{asset('img/'.$servicios->imagen)}}" height="100" width="100">
                </div>
            </div>  
        </div>
        <hr> 
        <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="imagen" class="mr-2"> <h5>{{ __('Cargar Imagen') }}</h5></label>
            <div class="input-group mb-3">


                <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" class="centerip" placeholder="" value="{{$servicios->nombre}}">
                @error('imagen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div> 

    </div>

    <div class="row">

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>



</div>
</div>

</div>

@push('scripts')

@include('js.servicios')

@endpush


@endsection
