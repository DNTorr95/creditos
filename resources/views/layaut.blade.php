<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/start/jquery-ui.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">

<!-- Font Awesome -->
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">



  </head>
<title> </title>


    <body >

      @if (auth()->guest())
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="pt-3 pb-3" >


            <ul class="navbar-nav mr-auto">


                <li class="nav-item" style="margin-top: 0px;">
                <a class="nav-link" href="#" href="#">Atencion al cliente
                    <i class="bi bi-headphones"> </i>
                </a>
                </li>

              <li id="separadores" style="margin-top: 5px;">
                 <a href="" style="padding-left: 0px; padding-right: 0px;">|</a>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Agencias y sucursales
                    <i class="bi bi-geo-alt"></i>
                </a>

                </i>
                <li id="separadores" style="margin-top: 5px;">
                    <a href="" style="padding-left: 0px; padding-right: 0px;">|</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Mapa del sitio
                    <i class="bi bi-globe">
                    </i>
                </a>

            </ul>
        </div>
        </div>


    </nav>
        @endif


<!-- JQuery -->
<!-- Bootstrap tooltips -->



   @yield('contenido')
  </body>
</html>

