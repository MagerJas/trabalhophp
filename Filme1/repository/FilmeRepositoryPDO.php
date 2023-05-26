<?php
  
  
  requise"Conexao.php";
  
  
  
   class FilmeRepositoryPDO{
     
     private $conexao;
     
     public function_construct() {
       $this-> conexao= Conexao::criar();
     }
    }
     
     
     
     public funcion listarTodos():array{
       
     $bd= Conexao::criar();
       $listaFilme=array();
     $sql="SELECT * FROM filmes";
     $filmes=$this->conexao ->query(sql);
     while ($filme=$filmes->fetchObject()) {
       array_push($listaFilme, $listaFilme);
     }
       return   $listaFilme;
 }
     
  public funcion salavar(Filme $filme):bool {
    $sql= "INSERT INTO filmes(titulo,poster,sinopse,nota) VALUES (
      '$titulo',  '$poster' , '$sinopse', '$nota' ,  );
    $stmt=$this->conexao ->prepare($sql);
    $stmt->bindValue( ':titulo, $titulo->titulo,PDO::PARAM_STR);
    $stmt->bindValue( ':sinopse, $sinopse->sinopse,PDO::PARAM_STR );
    $stmt->bindValue( ' :nota, $nota->nota,PDO::PARAM_STR);
    $stmt->bindValue( ' :poster, $poster->poster,PDO::PARAM_STR);
    return $stmt->execute();

  }

?>