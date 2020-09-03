<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<div class="row">
  <div class="col-3"> <h2>Logo</h2></div>
  <div class="col-3"> <h6>Síguenos</h6></div>
  <div class="col-3"> <h6>Contáctanos</h6></div>
  <div class="col-3"> <h2>Carrito</h2></div>

</div>

<nav class="navbar navbar-expand-lg navbar-light" style="background: #d9534f; position: fixed; z-index: 1; width: 100%; padding-top: 0 !important;">
  <a class="navbar-brand" href="#"><img src="" style="max-width: 160px; max-height: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#inicio" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('cauchos')}}" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Cauchos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('accesorios')}}" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Accesorios y Autopartes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('servicios/show')}}" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio')}}" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Mi Cuenta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio')}}" style="color: #FFFFFF; font-family: 'Poppins', sans-serif;">Ir al carrito</a>
      </li>      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>

<div id="inicio" class="container-fluid" style="width: 100%;height: 100vh;background: url({{asset('img/'.$inicio->imagen)}})  center;background-size: cover;position: relative;">
  
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>