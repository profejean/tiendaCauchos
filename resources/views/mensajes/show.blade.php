@extends ('layouts.admin')
@section ('content')
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Mi Cuenta') }}</h2>
            </div>
        </div>

<div class="col-12 text-center">
  <h4>Tus Mensajes</h4>
</div>            

        {!! Form::model($mensajes, ['method'=>'GET','route'=>['mensajes.index',$mensajes->id],'files'=>'true']) !!}

        {{Form::token()}}
        
       <div class="row"> 
       	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <div class="form-group">
                <label for="usuario_id">USUARIO:</label><br> 
                <input disabled="" type="text" name="usuario_id" value="{{$mensajes->usuario_id}}" class="form-control" id="usuario_id" placeholder=" Remitente del Mensaje" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <div class="form-group">
                <label for="fecha">FECHA:</label><br> 
                <input disabled="" type="text" name="fecha" value="{{$mensajes->fecha}}" class="form-control" id="fecha" placeholder=" Fecha del Mensaje" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
             <div class="form-group">
                <label for="status">STATUS:</label><br> 
                <input disabled="" type="text" name="status" value="{{$mensajes->status}}" class="form-control" id="status" placeholder=" Status del Mensaje" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
            </div>
        </div>     

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                       
        </div> 

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
                    	<label for="cuerpo">Mensaje:</label><br>
            <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="form-group row" style="margin-left: 5px;">
                        <textarea class="@error('cuerpo') is-invalid @enderror" type="text" name="cuerpo" rows="4" id="cuerpo" placeholder="Cuerpo del Mensaje" style="width: 95%;"></textarea>

                            @error('cuerpo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

         <div class="row" style="text-align: center;">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('mensajes')}}" role="button">Regresar</a>

            </div>

        </div>
              
          </div>  

    </div>

 </div>     
    

        {{Form::close()}}
     




@endsection