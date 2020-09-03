@extends('layouts.admin')

@section('content')

<div class="col-12 text-center">
  <h2>Panel Administrativo</h2>
</div> 

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
      <div class="col-lg-6 col-md-6 col-sm-12">

        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="#" class="btn btn-danger btn-block"><h5>Usuarios</h5></a></div>
         
        </div>
        
        <div class="row mt-3">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="{{url('orden_compras')}}" class="btn btn-danger btn-block"><h5>Pedidos</h5></a></div>
         
        </div>

        <div class="row mt-3">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="{{url('tasas')}}" class="btn btn-danger btn-block"><h5>Tasa</h5></a></div>
         
        </div>

        <div class="row mt-3">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="{{url('productos')}}" class="btn btn-danger btn-block"><h5>Cauchos y Accesorios</h5></a></div>
         
        </div>        

        <div class="row mt-3">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="{{url('servicios')}}" class="btn btn-danger btn-block"><h5>Servicios</h5></a></div>
         
        </div>

        <div class="row mt-3">
        <div class="col-lg-3 col-md-3 col-sm-12">Icono</div>
        <div class="col-lg-9 col-md-9 col-sm-12"><a href="{{url('general')}}" class="btn btn-danger btn-block"><h5>Inicio</h5></a></div>
         
        </div>              
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
  
</div>


@endsection
