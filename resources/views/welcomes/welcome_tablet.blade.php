<div class="d-none d-md-block d-lg-none">
  
<div class="container-fluid fixed-top" style="z-index: 1; background-color: #FFF">

<div class="row"> 

  <div class="col-4"> 
    <div style="width: 100%;background: white;">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('img/caucho.png')}}" style="max-width: 200px;">
      </a> 
    </div>
  </div>



  <div class="col-4 text-center"> 
    <div style="width: 100%;background: white;">
      <h6>  Contáctanos:</h6>
      <h6> (0212-632-8106) / (0414-197-8215) / (0412-900-5163)</h6>
                   
    </div>
  </div>         

  <div class="col-4" style="text-align: right;"> 
    <div style="width: 100%;background: white;">
      <a class="navbar-brand" href="{{url('carrito')}}">
        <img src="{{asset('img/carro.png')}}" style="max-width: 100px; max-height: 70px;">
          <span class="badge badge-light">{{$cantidad_carrito}}</span>
          <span class="sr-only">unread messages</span>
      </a> 
    </div>
  </div>

</div>

<div class="row">

<nav class="navbar navbar-expand-lg navbar-light" style="background:  #d9534f; width: 100%;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}"><h5 style="color: #FFFFFF">Inicio</h5><span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('cauchos')}}"><h5 style="color: #FFFFFF">Cauchos</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('accesorios')}}"><h5 style="color: #FFFFFF">Accesorios y Autopartes</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('servicios_ver')}}"><h5 style="color: #FFFFFF">Servicios</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('login')}}"><h5 style="color: #FFFFFF">Mi cuenta</h5></a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="{{url('carrito')}}"><h5 style="color: #FFFFFF">Ir al carrito</h5>

        </a>
      </li>

      @if(Auth::check())
 
       <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><h5 style="color:#FFFFFF; margin-top: 5px;">{{ __('Salir') }}</h5>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      </li>

      @endif

    </ul>
  </div>
  
</nav>
</div>
</div>

<div class="container-fluid baner_tablet" style="margin-top:130px;">
  

  
</div>  

   <div class="container-fluid fixed-bottom" style="background: #FFF;z-index: 1;">

  
  <div class="row justify-content-center">

    <span>
      <h6 class="mt-3" style="font-size: 15px;">Todos los derechos reservados</h6>    
    </span>

        <h6 class="mt-3 ml-5">Síguenos:</h6>  
    <span class="ml-1 mt-1 mb-1">

      <a target="_blank" href="https://www.instagram.com/juancaucho2018"><img src="{{asset('img/instagram.png')}}" height="40" alt=""></a> 
      <a target="_blank" href="https://www.facebook.com/JUAN-Caucho-2018-CA-110198903916526"><img src="{{asset('img/facebook.png')}}"  height="40"alt=""></a> 
      <a target="_blank" href="https://vm.tiktok.com/ZSPxqKU3"><img src="{{asset('img/tik-tok.png')}}"  height="40"alt=""></a> 
      
    </span>


  </div>


</div>
</div>
