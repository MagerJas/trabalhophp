<?php

session_start();
//require "./repository/FilmeRepository.php";
require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";
require"./util/SimpleImage.php";
  
  class FilmesController{
    public function index(){
       $FilmesRepository= new FilmesRepositoryPDO();
       return $filmes=$FilmesRepository->listarTodos();
      
    }
    
    
    public function save($request){
      
    
$filmesRepository= new FilmeRepositoryPDO();
$filme=(object) $request;
      
 $upload= $this->savePoster($_FILES);
      
 if(gettype(Supload)=="string"){
   $filme->poster= $upload;
 }
      

if ($filmesRepository->salvar($filme));
   $_SESSION["msg"]="Filme cadastrado com sucesso.";

else
$_SESSION["msg"]="Erro ao cadastrar filme.";

header("Location: /");
    }
    
    
    private function savePoster($file){
      $posterDir="imagens/poster/";
      $posterPath= $posterDir. basename($file["poster_file"]["name"]);
      $posterTmp=$file["poster_file"] ["tmp_name"];


      $image= new SimpleImage();
      $image->load($posterTmp);
      $image->resize(original);
      $image->save($posterPath);
      return $posterPath;
    }
    
    
    
  }
 
  
?>