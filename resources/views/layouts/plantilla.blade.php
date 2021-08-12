<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<!-- Image and text -->

<center><a class="navbar-brand">
        <img src="https://scontent-bog1-1.xx.fbcdn.net/v/t1.15752-9/234041912_517104472713993_1312004771814513988_n.png?_nc_cat=104&ccb=1-4&_nc_sid=ae9488&_nc_eui2=AeGHauOTbTlHW_uA7MEPeCheH3z9pUSMxiAffP2lRIzGICh4wIghnAczc27A_LW-GAK_KJ0skXI_IWbB6GHFXNk9&_nc_ohc=H_aQG2pC8wsAX9ZQEZh&_nc_ht=scontent-bog1-1.xx&oh=3e8eab725177e744a3c986309979db7f&oe=613403E4" class="rounded float-end" width="60" class="d-inline-block align-top" alt="">
    INFORMAL WORK SERVICE
    </a></center>

<!--margin="auto" display="block"  class="rounded float-right"-->
<div class="container-fluid">
    <img src="https://st3.depositphotos.com/12071432/18627/i/600/depositphotos_186272986-stock-photo-serious-handsome-barber-holding-razor.jpg"  class="rounded float-right"   width="100">
      </div>
    </body>


<!-- End Image and text -->



<!-- Navbar -->

<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="btn btn-info" href="inicio">INICIO</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="btn btn-warning" href="quienes-somos">QUIENES SOMOS</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="acerca-de">ACERCA DE</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success" href="contacto">CONTACTO</a>
        </li>
      </ul>
    </div>
  </nav>
</nav>


<!-- End Navbar-->




<div class="row">
<div class="btn-group-vertical">
        <!-- sidebar -->
                <button type="button" class="btn btn-primary">Categoria</button>
                <button type="button" class="btn btn-light">salud y bellesa</button>
                <button type="button" class="btn btn-light">Niñeras</button>
                <button type="button" class="btn btn-light">Reparaciones</button>
                <button type="button" class="btn btn-light">Electricista</button>
                <button type="button" class="btn btn-light">Peluqueria</button>
                <button type="button" class="btn btn-light">Albañil</button>
                <button type="button" class="btn btn-light">Mecanico</button>
                <button type="button" class="btn btn-light">Aseadoras</button>
                <button type="button" class="btn btn-light">Enfermer@s</button>
                <button type="button" class="btn btn-primary">Ver más</button>
            </div>
        <!--End Sidebar -->



        <!-- Content--->
<div class="container">
        <center>
        <div class="col-xl-" style="">
            @yield('contenido')
       </div>
    </center>
</div>
       <!-- end Content-->




<!-- pie de paguina-->


<footer style="background-color: rgba(197, 199, 201, 0.795); position:absolute; bottom:0%;  width: 100%;">
    <a href="https://www.youtube.com/">
        <img src="https://1000marcas.net/wp-content/uploads/2020/02/YouTube-s%C3%ADmbolo.jpg" class="rounded float-right" cursor="pointer" width="80px" margin="11px 8px" padding="11px 16px 11px">
    <a href="https://www.facebook.com/">
        <img src="https://www.internetmatters.org/wp-content/uploads/2021/03/facebook-logo-new.png" class="rounded float-right" cursor="pointer" width="85px" margin="11px 8px" padding="11px 16px 11px">
    </a>
</footer>

</body>
</html>


