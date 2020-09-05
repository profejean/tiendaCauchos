@extends ('layouts.users')

@section ('content')


  <div class="row justify-content-center mt-5">
    <img src="{{asset('img/riesgo.png')}}" alt="" style="width: 50px;">
    <h2 class="ml-2">
      Tasas
    </h2>    
  </div>


        {!! Form::open(array('url'=>'tasas', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


         <div class="row" style="background-color: #968F8F">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                <h6 style="color: #FFFFFF; text-align: center;">Fecha</h6>
            <div class="input-group mb-3">
                <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" id="fecha" placeholder="Fecha de la Tasa" value="{{old('fecha')}}">
                @error('fecha')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                    <h6 style="color: #FFFFFF; text-align: center;">Hora</h6>
                <div class="input-group mb-3">
                    <input type="time" name="hora" class="form-control @error('hora') is-invalid @enderror" id="hora" placeholder="Hora de la Tasa" value="{{old('hora')}}">
                 @error('hora')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

              <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                    <h6 style="color: #FFFFFF; text-align: center;">Monto</h6>
                <div class="input-group mb-3">
                    <input min="0" step=".01" type="number" name="monto" class="form-control @error('monto') is-invalid @enderror" id="monto" placeholder="Monto de la Tasa" value="{{old('monto')}}">
                 @error('monto')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-5">

                    <div class="form-group row" style="margin-left: 5px;">

                        <textarea class="@error('comentarios') is-invalid @enderror" type="text" name="comentarios" rows="4" id="comentarios" placeholder="Comentarios" style="width: 95%;">{{old('comentarios')}}</textarea>

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
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
            <div class="form-group">
                <button class="btn btn-danger" type="submit" style="float: right;"><h6>Guardar</h6></button>
            </div>
        </div>

    {{ Form::close() }}

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
            <div class="form-group">
                <a class="btn btn-danger" href="{{url('tasas')}}" role="button"><h6>Regresar</h6></a>
            </div>
        </div>
</div>

                
@push('scripts')



@endpush


@endsection
