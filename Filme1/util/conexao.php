<?php 
  
  class conexao{
     public static funcion criar():PDO{
      return  new PDO("sqlite:db/filmes.db");
     }
    
  }
  
  
  
  
  ?>