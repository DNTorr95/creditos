@extends('layaut')

@section('contenido')



<div class="container-fluid" >
  <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel"  >
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000" style="text-align: center">
        <img class="img-fluid"  style="object-fit: scale-down;height: 550px;"  src="https://niu.com.ni/wp-content/uploads/2022/02/hipoteca.jpg"   alt="">

        <div class="carousel-caption d-none d-md-block">
            <div class="row justify-content-around" style="color: white">
                <div class="col-lg-8 col-md-7 col-sm-11 text-white text-shadow-1 mt-4">
            <h1 class="fw-600 ls--2 mt-5" style="text-align: left">
                <span class="fw-400 ls--3 small" style="font-size: 50px">Credito de</span><br/>
                Vivienda
			</h1>
            <hr class="separator-150x5 bg-primary mx-0 my-45"/>
            <h5  style="text-align: left" class="ls--2">Accede a nuestros credito de vivienda otorgando tus requisitos de manera online  <input onClick="#" type=button value="Saber Más" name="boton"
                style="BORDER: rgb(45, 136, 65) 5px dashed; FONT-SIZE: 8pt; FONT-FAMILY: Verdana;
                       BACKGROUND-COLOR: rgb(45, 136, 65)">.</h5>
            <h5  style="text-align: left" class="ls--2 pr-2">Agenda tu solicitud siguiendo los pasos online. </h5>


        </div>
        </div>
    </div>
    </div>
      <div class="carousel-item" data-bs-interval="3000" style="text-align: center">
        <img class="img-fluid"  style="object-fit: scale-down;height: 550px;"  src="https://www.mazdavardi.com.co/wp-content/uploads/2021/06/credito-de-vehiculo.jpg"   alt="">
        <div class="carousel-caption d-none d-md-block" style="text-align: center;">
            <div class="row justify-content-around">
                <div class="col-lg-7 col-md-7 col-sm-11 text-white text-shadow-1 mt-4">
            <h1 class="fw-600 ls--2 mt-5" style="text-align: left">
                <span class="fw-400 ls--3 small" style="font-size: 50px">Credito</span><br/>
                Vehicular
			</h1>
            <hr class="separator-150x5 bg-primary mx-0 my-45"/>
            <h5  style="text-align: left" class="ls--2">Accede a nuestros credito vehicular otorgando tus requisitos de manera online <input onClick="#" type=button value="Saber Más" name="boton"
                style="BORDER: rgb(45, 136, 65) 5px dashed; FONT-SIZE: 8pt; FONT-FAMILY: Verdana;
                       BACKGROUND-COLOR: rgb(45, 136, 65)">.</h5>
            <h5  style="text-align: left" class="ls--2 pr-2">Agenda tu solicitud siguiendo los pasos online..</h5>

          </div>
        </div>
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000" style="text-align: center">
        <img class="img-fluid"  style="object-fit: scale-down;height: 550px;"  src="https://sanmateo.com.bo/wp-content/uploads/2021/11/credito-para-personas-con-discapacidad.jpg"   alt="">
        <div class="carousel-caption d-none d-md-block" style="text-align: center;">
            <div class="row justify-content-around">
                <div class="col-lg-7 col-md-7 col-sm-11 text-white text-shadow-1 mt-4">
            <h1 class="fw-600 ls--2 mt-5" style="text-align: left">
                <span class="fw-400 ls--3 small" style="font-size: 50px">Credito de</span><br/>
                Consumo
			</h1>
            <hr class="separator-150x5 bg-primary mx-0 my-45"/>
            <h5  style="text-align: left" class="ls--2">Accede a nuestros creditos de consumo otorgando tus requisitos de manera online  <input onClick="#" type=button value="Saber Más" name="boton"
                style="BORDER: rgb(45, 136, 65) 5px dashed; FONT-SIZE: 8pt; FONT-FAMILY: Verdana;
                       BACKGROUND-COLOR: rgb(45, 136, 65)">.</h5>
            <h5  style="text-align: left" class="ls--2 pr-2">Agenda tu solicitud siguiendo los pasos online..</h5>

          </div>
        </div>
    </div>
    </div>
    </div>
    <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"style="color: black"  aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>





  <br>
  <section>
    <div class="row">
        <div class="col-6" style="text-align: right">
            <a class="btn btn-primary btn-sx"  href="/login" role="button">Iniciar sesion</a>
        </div>
        <div class="col-6">


         <a class="btn btn-success btn-sx" href="paciente/create">Obtener cuenta usuario</a>





        </div>
    </div>
</section>
<div>

</div>

<br>
<footer class="pt-5 pb-4" style="background: rgb(35, 44, 146)">
    <section class="container">
        <div class="row">

            <div class="col">
                <p style="text-align: center;font-family: Arial, Helvetica, sans-serif;color: white"> Creditos Online ©2022 . <br class="d-block d-md-none"/>Todos los derechos reservados</p>
            </div>
        </div>
    </section>
</footer>

@endsection

