<?php
include 'Global/conexion.php';
include 'carrito.php'
?>

<!DOCTYPE html>
<html lang="en">
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
    <br>
    <br>
    <br>
<div class="container">
    
    <h3>Lista de Carrito</h3>
    <?php if(!empty($_SESSION['CARRITO'])) {?>
   <table class="table table-light">
       <tbody>
           <tr>
               <th width="40%" class="text-center">Descripcion</th>
               <th width="15%" class="text-center">Cantidad</th>
               <th width="20%" class="text-center">Precio</th>
               <th width="20%"  class="text-center">Total</th>
               <th width="5%">---</th>
               
           </tr>
           <?php $total=0;?>
           <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
           <tr>
               <td width="40%" class="text-center"><?php echo $producto['NOMBRE']?></td>
               <td width="15%"  class="text-center"><?php echo $producto['CANTIDAD']?></td>
               <td width="20%"  class="text-center">$<?php echo $producto['PRECIO']?></td>
               <td width="20%"  class="text-center"><?php echo number_format ($producto['PRECIO']*$producto['CANTIDAD'],2)?></td>
               <td width="5%">
               <form action="" method="post">
                   <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
               <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
               </form>   
               </td>
               
           </tr>
           <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
           <?php }?>
           <tr>
               <td colspan="3" ><h3>Total</h3></td>
               <td align="rigth"><h3>$<?php echo number_format($total,2);?></h3></td>
           </tr>
       </tbody>
   </table>
    <?php }else { ?>
        <div class="alert alert-success" role="alert">
            No hay productos en el carrito......
        </div>
        
    <?php }?>
   </div>
   </body>
</html>