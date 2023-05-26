<?php
  
  $rota= $SERVER[ "REQUEST_URI" ];
  $metodo= $SERVER["REQUEST_METHOD"];
  
  require"./controller/FilmesControler.php";
  
 if $rota="/" {
   require "view/galeria.php";
   exit();
  }
  
  if($rota=="/novo"){
   if ($metodo== "GET")   require "view/cadastrar.php";
  if ($metodo== "POST")  {
        $controller=new FilmesController();
        $controller->save($REQUEST);
  }
  exit();
}
     
if(substr($rota,0, strlen "/favoritar/2")){
   $controller= new FilmesController();
   $controller->favoritar(basename($rota));
   exit();
}
  
  require "404.php";

  
  ?>
  