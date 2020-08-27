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
  <!--boostrap carrousel-->
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark gris scrolling-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
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
      <br/><br/><br/>
  <section>
  <div class="container">
  <br>
        

       
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4 text-dark">Tienda de ropa</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
      
      <div class="col-lg-9">
      <!--carrousel tienda-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="static/img/tienda.jpg" alt="First slide">
            </div>
          <div class="carousel-item">
               <img class="d-block w-100" src="static/img/tienda.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="static/img/tienda.jpg" alt="Third slide">
           </div>
          </div>
           <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
          </a>
       </div>
       <hr class="my-4">
      <!--cfin de carrousel-->
 
      <?php if ($mensaje!="") {    ?>

      <div class="alert alert-success" role="alert">
         <?php echo $mensaje ?>
          <a href="mostrarCarrito.php"  class="badge badge-success">Ver carrito</a>
      </div>
      <?php }?>
      <div class="row">

      <?php
      $sql = $pdo->prepare('SELECT * FROM tblproductos');
      $sql->execute();
      $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        //print_r($resultado);
        
      ?>
      
      <?php
         foreach($resultado as $producto){ ?>
        <div class="col-4">
            <div class="card">
                <img title="<?php echo $producto['Nombre']; ?>"
                 alt="<?php echo $producto['Nombre']; ?>" 
                 class="card-img-top" height="250px;"
                  src="<?php echo $producto['Imagen']; ?>" alt="">
                <div class="card-body">
                    <span><?php echo $producto['Nombre']; ?></span>
                    <h5 class="card-title">$<?php echo $producto['Precio']; ?></h5>
                    <p class="card-text">Descripcion</p>
                        
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                        <input type="hidden" name="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                        <input type="hidden" name="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                        <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView">Ver </button>
                        <button class="btn btn-warning"
                     name="btnAccion" value="Agregar" 
                     type="submit">Add to card</button>
               </form> 
                </div>
            </div>
        </div>

         <?php } ?>

  <!--          
  </div>
<!--botton flotante-->
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

<!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
        <?php
         foreach($resultado as $producto){ ?>
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"
                  title="<?php echo $producto['Nombre']; ?>"
                 alt="<?php echo $producto['Nombre']; ?>" 
                 class="card-img-top" height="250px;"
                  src="<?php echo $producto['Imagen']; ?>"  alt="First slide">
                </div>

              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              <ol class="carousel-indicators">
                <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="1">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="2">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg" width="60">
                </li>
              </ol>
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong><?php echo $producto['Nombre']; ?></strong>
            </h2>
            <h4 class="h4-responsive">
              <span class="green-text">
                <strong>$<?php echo $producto['Precio']; ?></strong>
              </span>
              <span class="grey-text">
                <small>
                  <s>$89</s>
                </small>
              </span>
            </h4>
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
              <!-- Accordion card -->
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    <h5 class="mb-0">
                      Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                  <?php echo $producto['Descripcion']; ?>    
                </div>
                </div>
              </div>
              <!-- Accordion card -->
              <!-- Accordion card -->
              
              <!-- Accordion card -->
              <!-- Accordion card -->
              
              <!-- Accordion card -->
            </div>
            <!-- Accordion wrapper -->
            <!-- Add to Cart -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                  <select class="md-form mdb-select colorful-select dropdown-primary">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">White</option>
                    <option value="2">Black</option>
                    <option value="3">Pink</option>
                  </select>
                  <label>Select color</label>

                </div>
                <div class="col-md-6">

                  <select class="md-form mdb-select colorful-select dropdown-primary">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">XS</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                  </select>
                  <label>Select size</label>

                </div>
              </div>
              <div class="text-center">
                
              <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                        <input type="hidden" name="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                        <input type="hidden" name="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                        <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                       
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" name="btnAccion"  
                     type="submit" value="Agregar">Add to cart
                  <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
                </button>
               </form> 
               
              </div>
            </div>
            <!-- /.Add to Cart -->
          </div>
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>


    </section>

    <hr class="my-4">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>