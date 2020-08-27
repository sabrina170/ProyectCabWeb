<?php
define("KEY","develoteca");
define("COD","AES-128-ECB");
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=carrito', 'root', '',
         array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      }  
      catch(PDOException $e){
        print "¡Error!: <br/>";  
        return null;
      }

?>