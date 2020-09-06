@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')
  
<div class="row mt-5">

  <div class="col-lg-5 col-md-5 col-sm-12"></div>

  <img src="{{asset('img/person.png')}}" class="text-center" style="width: 5%;">

  <h3 class="text-center mt-3">Mi Cuenta</h3>

  <div class="col-lg-7 col-md-7 col-sm-12"></div>

</div>


<hr style="background-color: #968F8F; padding: 3px;">

{!! Form::model($usuarios,['method'=>'PATCH','route'=>['actualizar_pass',$usuarios->id],'files'=>'true']) !!}

     {{Form::token()}}

       <input type="hidden" value="{{$usuarios->id}}" name="id">


        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                   <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Nueva contraseña">
                   @error('password')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>  
    </div>

    

    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-5" style="text-align: center;">

            
              <button class="btn btn-outline-danger" type="submit"><h5>Guardar</h5></button>
            
    {{Form::close()}}

                    <a class="btn btn-outline-danger" href="{{url('usuarios')}}" role="button"><h5>Regresar</h5></a>

                
            </div> 

    </div>
 @push('scripts')
 

 @endpush
@endsection