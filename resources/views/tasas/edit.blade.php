@extends ('layouts.admin')

@section ('content')


<div class="container mt-5 mb-5">
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Tasas') }}</h2>

            </div>
        </div>

        {!! Form::model($tasas, ['method'=>'PATCH','route'=>['tasas.update',$tasas->id],'files'=>'true']) !!}


         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                  <div class="input-group-prepend">                    
                        <label for="fecha" class="mr-2">{{ __('Fecha') }}</label>
                    </div>
                <div class="input-group mb-3">
                    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" id="fecha" placeholder="Fecha de la Tasa" value="{{$tasas->fecha}}">
                 @error('fecha')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12">
                  <div class="input-group-prepend">                    
                        <label for="hora" class="mr-2">{{ __('Hora') }}</label>
                    </div>
                <div class="input-group mb-3">
                    <input type="time" name="hora" class="form-control @error('hora') is-invalid @enderror" id="hora" placeholder="Hora de la Tasa" value="{{$tasas->hora}}">
                 @error('hora')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

              <div class="col-lg-2 col-md-2 col-sm-12">
                  <div class="input-group-prepend">                    
                        <label for="monto" class="mr-2">{{ __('Monto') }}</label>
                    </div>
                <div class="input-group mb-3">
                    <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" id="monto" placeholder="Monto de la Tasa" value="{{$tasas->monto}}">
                 @error('monto')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="form-group row" style="margin-left: 5px;">

                        <textarea class="@error('comentarios') is-invalid @enderror" type="text" name="comentarios" rows="4" id="comentarios" placeholder="Comentarios" style="width: 95%;">{{$tasas->comentarios}}</textarea>

                            @error('comentarios')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

<div class="row">
    
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">
                
                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

    {{ Form::close() }}

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('tasas')}}" role="button">Regresar</a>

            </div>

        </div>
</div>

                
@push('scripts')



@endpush


@endsection
