<?php
include 'Global/conexion.php';
include 'carrito.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/estilo.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark gris scrolling-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="static/img/Cael.png" width="140" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="measurements.php">Measurements</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="tienda.php">Shop</a>
                </li>
              </ul>
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <a class="nav-link"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"><i class="far fa-user"></i></a>
                </li>
                <li class="nav-item">
              <a class="nav-link" href="mostrarCarrito.php"><i class="fas fa-shopping-cart">(
                        <?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>
                        )</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cerrar.php">Salir</a>
            </li>
              </ul>
            </div>
        </div>
      </nav>
    <section class="fondo view">
      <div class="mask rgba-black-slight d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <!--texto del logo-->
               <div class="col-md-6 text-white text-center text-md-left">
                <a class="navbar-brand" href="#">
                    <img src="static/img/Cael.png" width="500" height="140" class="d-inline-block align-top" alt="" loading="lazy">
                  </a>
                </div>  
            </div>
        </div> 
      </div>
    </section>

    <section>
      <main>
        <div class="container">
          <section class="mt-5 wow fadeIn">
            <div class="row">
              <div class="col-md-6 mb-4">
                <img src="static/img/imagen2.jpg" class="img-fluid z-depth-1-half" alt="">
              </div>
              <div class="col-md-6 mb-4">
                <h3 class="h3 mb-3">PERSONALIZA TUS PRENDAS</h3>
                <p>Ropa a medida ........asdnasidnasidnasi</p>
                <!-- CTA -->
                <a target="_blank" href="measurements.php" class="btn btn-indigo btn-md">Download
                  <i class="fas fa-download ml-1"></i>
                </a>
              </div>
            </div>
          </section>
        </div>
      </main>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="column">
            <img src="static/img/imagen.jpg"/>
            <img src="static/img/imagen1.jpg" />
            <img src="static/img/prueba2.jpg">
          </div>
          <div class="column">
            <img src="static/img/prueba.jpg">
            <img src="static/img/prueba1.jpg">
            <img src="static/img/prueba.jpg">
          </div>
          <div class="column">
            <img src="static/img/prueba.jpg">
            <img src="static/img/prueba.jpg">
            <img src="static/img/prueba1.jpg">
          </div>
  
        </div>
      </div>

    </section>
    <hr class="my-4">

          
  <div class="container_boton">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    <div class="btn-mas">
        
        <label for="btn-mas" class="icon-mas2"><i class="fas fa-plus"></i></label>
    </div>
</div> 

    <footer>
      <div class="container-footer-all">
      <div class="container-body">
        <div class="column1">
          <h1>
            Envia tus Consultas y Reclamos.
          </h1>
          <div class="card">
         <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" action="#!">
        <div class="md-form mt-3">
            <input type="text" id="materialContactFormName" class="form-control">
            <label for="materialContactFormName">Nombre y Apellido</label>
        </div>
        <div class="md-form">
            <input type="email" id="materialContactFormEmail" class="form-control">
            <label for="materialContactFormEmail">E-mail</label>
        </div>
        <div class="md-form">
            <input type="email" id="materialContactFormAsunto" class="form-control">
            <label for="materialContactFormAsunto">Asunto</label>
        </div>
        <div class="md-form">
            <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Message</label>
        </div>
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Enviar</button>

    </form>
</div>
</div>
        </div>
        <div class="column2">
          <h1>Redes Sociales</h1>
          <div class="row-icon">
            <img src="static/img/facebook.png" alt="">
            <label for="">Siguenos en Facebook</label>

          </div>
          <div class="row-icon">
            <img src="static/img/twitter.png" alt="">
            <label for="">Siguenos en Titter</label>

          </div>
          <div class="row-icon">
            <img src="static/img/instagram.png" alt="">
            <label for="">Siguenos en Instragram</label>

          </div>
          <div class="row-icon">
            <img src="static/img/facebook.png" alt="">
            <label for="">Siguenos en google plus</label>

          </div>
          <div class="row-icon">
            <img src="static/img/facebook.png" alt="">
            <label for="">Siguenos en Pinteres</label>

          </div>

        </div>
        <div class="column3">
          <h1>Informacion Contactos</h1>
          <div class="row2">
             <img src="static/img/facebook.png" alt="">
             <label for="">La romana, Republica de peru lima
               urb.la merced
             </label>
          </div>
          <div class="row2">
            <img src="static/img/facebook.png" alt="">
            <label for="">
              967-497-689
            </label>
         </div>
         <div class="row2">
          <img src="static/img/facebook.png" alt="">
          <label for="">
            caelinformacion@gmail.com
          </label>
       </div>

        </div>
      </div>
    </div>
    <div class="container-footer">
      <div class="footer">
      <div class="copyright">
        © 2020 Todos los Derechos Reservados - <a href="https://www.appsitecinfo.com/">Appsitec</a>
      </div>
    </div>
   </div>
    </footer>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>