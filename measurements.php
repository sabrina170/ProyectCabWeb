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
        <div class="row justify-content-center" style="margin-top:200px; margin-bottom:200px;">
            <div class="col-8" style="border:2px solid gray">
                <div class="row">
                    <div class="col-6" style="margin-top:70px;">
                        <div>
                            <img id="imgcamisa" style="margin-left:20px;margin-top:80px" width="500px" src="static/img/tallaL106.png">
                        </div>
                    </div>
                    <div class="col-5" style="margin-top:50px;margin-bottom:50px;">                   
                      <div class="form-group">
                        <button id="tallas" onclick="cambioimgS()" class="btn" href="" style="margin-right:50px;">S</button>
                        <button id="tallam" onclick="cambioimgM()" class="btn" href="" style="margin-right:50px;">M</button>
                        <button id="tallal" onclick="cambioimgL()" class="btn" href="">L</button>
                      </div>
                      <div class="form-group">
                          <label for="customRange1">A.- CONTORNO DE PECHO</label>
                          <input type="range" min="102" max="110" value="106" class="custom-range" id="myRange">
                          <small>Valor: <span id="demo"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">B.- CINTURA</label>
                          <input type="range" min="91" max="101" value="96" class="custom-range" id="myRange1">
                          <small>Valor: <span id="demo1"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">C.- ANCHURA DE HOMBROS</label>
                          <input type="range" min="44" max="47" value="44.5" class="custom-range" id="myRange2">
                          <small>Valor: <span id="demo2"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">D.- LONGITUD DE MANGA</label>
                          <input type="range" min="68" max="70" value="69" class="custom-range" id="myRange3">
                          <small>Valor: <span id="demo3"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">E.- CONTORNO DE BRAZO</label>
                          <input type="range" min="38" max="44" value="41" class="custom-range" id="myRange4">
                          <small>Valor: <span id="demo4"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">F.- CUELLO</label>
                          <input type="range" min="40" max="42" value="41" class="custom-range" id="myRange5">
                          <small>Valor: <span id="demo5"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">G.- TALLE DELANTERO</label>
                          <input type="range" min="74" max="76" value="75" class="custom-range" id="myRange6">
                          <small>Valor: <span id="demo6"></span> cm.</small>
                      </div>
                      <div class="form-group">
                          <label for="formControlRange">H.- PUÑO</label>
                          <input type="range" min="16.5" max="19.5" value="18" class="custom-range" id="myRange7">
                          <small>Valor: <span id="demo7"></span> cm.</small>
                      </div>                     
                    </div>
                </div>     
            </div>
        </div>
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
                <form action="">
                  <label for="exampleForm2">Nombre</label>
                  <input type="text" id="exampleForm2" class="form-control">
                  <label for="exampleForm2">Correo</label>
                  <input type="text" id="exampleForm2" class="form-control">
                  <label for="exampleForm2">Asunto</label>
                  <input type="text" id="exampleForm2" class="form-control">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea2">Mensaje</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                  </div>
                  <button type="button" class="btn btn-light">Enviar</button>
                </form>
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
        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            var slider1 = document.getElementById("myRange1");
            var output1 = document.getElementById("demo1");
            var slider2 = document.getElementById("myRange2");
            var output2 = document.getElementById("demo2");
            var slider3 = document.getElementById("myRange3");
            var output3 = document.getElementById("demo3");
            var slider4 = document.getElementById("myRange4");
            var output4 = document.getElementById("demo4");
            var slider5 = document.getElementById("myRange5");
            var output5 = document.getElementById("demo5");
            var slider6 = document.getElementById("myRange6");
            var output6 = document.getElementById("demo6");
            var slider7 = document.getElementById("myRange7");
            var output7 = document.getElementById("demo7");

            output.innerHTML = slider.value;
            slider.oninput = function() {
                output.innerHTML = this.value;
                var x = this.value;
                if(x === "102"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL102.png";
                }
                if(x === "103"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL103.png";
                }
                if(x === "104"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL104.png";
                }
                if(x === "105"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL105.png";
                }
                if(x === "106"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL106.png";
                }
                if(x === "107"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL107.png";
                }
                if(x === "108"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL108.png";
                }
                if(x === "109"){
                  document.getElementById("imgcamisa").src = "static/img/tallaL109.png";
                }
                if(x === "110"){
                  document.getElementById("imgcamisa").src = "static/img/camisaL2.png";
                }
            }
            output1.innerHTML = slider1.value;
            slider1.oninput = function() {
                output1.innerHTML = this.value;
            }

            output2.innerHTML = slider2.value;
            slider2.oninput = function() {
                output2.innerHTML = this.value;
            }

            output3.innerHTML = slider3.value;
            slider3.oninput = function() {
                output3.innerHTML = this.value;
            }

            output4.innerHTML = slider4.value;
            slider4.oninput = function() {
                output4.innerHTML = this.value;
            }

            output5.innerHTML = slider5.value;
            slider5.oninput = function() {
                output5.innerHTML = this.value;
            }

            output6.innerHTML = slider6.value;
            slider6.oninput = function() {
                output6.innerHTML = this.value;
            }

            output7.innerHTML = slider7.value;
            slider7.oninput = function() {
                output7.innerHTML = this.value;
            }

            if ( slider.value === "103") {
              document.getElementById("imgcamisa").src = "static/img/tallam103.png";
            }
            if ( slider.value === "104") {
              document.getElementById("imgcamisa").src = "static/img/tallam104.png";
            } 
        </script>
        <script>
          function cambioimgL(){
            document.getElementById("imgcamisa").src = "static/img/camisaL2.png";
            document.getElementById("myRange").value = "110";
            document.getElementById("myRange1").value = "101";
            document.getElementById("myRange2").value = "47";
            document.getElementById("myRange3").value = "70";
            document.getElementById("myRange4").value = "44";
            document.getElementById("myRange5").value = "42";
            document.getElementById("myRange6").value = "76";
            document.getElementById("myRange7").value = "19.5";
          }
          function cambioimgM(){
            document.getElementById("imgcamisa").src = "static/img/tallaL106.png";
            document.getElementById("myRange").value = "106";
            document.getElementById("myRange1").value = "96";
            document.getElementById("myRange2").value = "45.5";
            document.getElementById("myRange3").value = "69";
            document.getElementById("myRange4").value = "41";
            document.getElementById("myRange5").value = "41";
            document.getElementById("myRange6").value = "75";
            document.getElementById("myRange7").value = "18";
          }
          function cambioimgS(){
            document.getElementById("imgcamisa").src = "static/img/camisas.png";
            document.getElementById("myRange").value = "102";
            document.getElementById("myRange1").value = "91";
            document.getElementById("myRange2").value = "44";
            document.getElementById("myRange3").value = "68";
            document.getElementById("myRange4").value = "38";
            document.getElementById("myRange5").value = "40";
            document.getElementById("myRange6").value = "74";
            document.getElementById("myRange7").value = "16.5";
          }
          if (condition) {
            
          }else{
            
          }
        </script>
    </body>
</html>