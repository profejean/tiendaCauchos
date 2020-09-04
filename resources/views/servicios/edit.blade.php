@extends ('layouts.admin')

@section ('content')

@include ('css.input_select_center_bg')

<div class="row justify-content-center mt-5 mb-2">
  <img src="{{asset('img/llave.png')}}" alt="" style="width: 50px;">
  <h2 class="ml-2">
    Servicios
</h2>    
</div>

{!! Form::model($servicios, ['method'=>'PATCH','route'=>['servicios.update',$servicios->id],'files'=>'true']) !!}

{{Form::token()}}        
  
<div class="container-fluid" style="background-color: #968F8F">
    
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">

        <div class="input-group mt-3">
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$servicios->nombre}}">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>

  <div class="row mt-3 text-center">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">

        <div class="form-group row">

            <textarea class=" @error('descripcion') is-invalid @enderror" type="text" name="descripcion" id="descripcion" placeholder="Descripción" style="width: 100%;"></textarea>

            @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">

        <div class="input-group mb-3 justify-content-center">
          <img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="150" height="150">
      <input type="file" name="imagen" class="form-control ml-2 @error('imagen') is-invalid @enderror" id="imagen" placeholder="" value="{{$servicios->imagen}}" style="background-color: #FFF; color: #968F8F;">
      @error('imagen')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
      </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>

</div>    


</div>

    <div class="row m-4">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>



 @push('scripts')
 
 @endpush
@endsection